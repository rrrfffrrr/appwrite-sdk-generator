<?php

namespace Appwrite\SDK\Language;

use Appwrite\SDK\Language;
use Twig\TwigFilter;

class Unity3D extends DotNet
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Unity3D';
    }

    /**
     * @return array
     */
    public function getFiles(): array
    {
        return [
            [
                'scope'         => 'default',
                'destination'   => 'CHANGELOG.md',
                'template'      => 'unity3d/CHANGELOG.md.twig',
            ],
            [
                'scope'         => 'default',
                'destination'   => 'CHANGELOG.md.meta',
                'template'      => 'unity3d/CHANGELOG.md.meta',
            ],
            [
                'scope'         => 'copy',
                'destination'   => '/icon.png',
                'template'      => 'unity3d/icon.png',
            ],
            [
                'scope'         => 'copy',
                'destination'   => '/icon.png.meta',
                'template'      => 'unity3d/icon.png.meta',
            ],
            [
                'scope'         => 'default',
                'destination'   => 'LICENSE.md',
                'template'      => 'unity3d/LICENSE.md.twig',
            ],
            [
                'scope'         => 'default',
                'destination'   => 'LICENSE.md.meta',
                'template'      => 'unity3d/LICENSE.md.meta',
            ],
            [
                'scope'         => 'default',
                'destination'   => 'package.json',
                'template'      => 'unity3d/package.json.twig',
            ],
            [
                'scope'         => 'default',
                'destination'   => 'package.json.meta',
                'template'      => 'unity3d/package.json.meta',
            ],
            [
                'scope'         => 'default',
                'destination'   => 'README.md',
                'template'      => 'unity3d/README.md.twig',
            ],
            [
                'scope'         => 'default',
                'destination'   => 'README.md.meta',
                'template'      => 'unity3d/README.md.meta',
            ],
            [
                'scope'         => 'default',
                'destination'   => 'Runtime.meta',
                'template'      => 'unity3d/Runtime.meta',
            ],
            [
                'scope'         => 'default',
                'destination'   => 'Tests.meta',
                'template'      => 'unity3d/Tests.meta',
            ],
            [
                'scope'         => 'method',
                'destination'   => 'Documentation~/examples/{{service.name | caseLower}}/{{method.name | caseDash}}.md',
                'template'      => 'unity3d/Documentation~/example.md.twig',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/Runtime/Appwrite.asmdef',
                'template'      => 'unity3d/Runtime/Appwrite.asmdef',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/Runtime/Appwrite.asmdef.meta',
                'template'      => 'unity3d/Runtime/Appwrite.asmdef.meta',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/src/{{ spec.title | caseUcfirst }}/Client.cs',
                'template'      => 'dotnet/src/Appwrite/Client.cs.twig',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/src/{{ spec.title | caseUcfirst }}/{{ spec.title | caseUcfirst }}Exception.cs',
                'template'      => 'dotnet/src/Appwrite/Exception.cs.twig',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/src/{{ spec.title | caseUcfirst }}/ID.cs',
                'template'      => 'dotnet/src/Appwrite/ID.cs.twig',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/src/{{ spec.title | caseUcfirst }}/Permission.cs',
                'template'      => 'dotnet/src/Appwrite/Permission.cs.twig',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/src/{{ spec.title | caseUcfirst }}/Query.cs',
                'template'      => 'dotnet/src/Appwrite/Query.cs.twig',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/src/{{ spec.title | caseUcfirst }}/Role.cs',
                'template'      => 'dotnet/src/Appwrite/Role.cs.twig',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/src/{{ spec.title | caseUcfirst }}/Extensions/Extensions.cs',
                'template'      => 'dotnet/src/Appwrite/Extensions/Extensions.cs.twig',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/src/{{ spec.title | caseUcfirst }}/Models/OrderType.cs',
                'template'      => 'dotnet/src/Appwrite/Models/OrderType.cs.twig',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/src/{{ spec.title | caseUcfirst }}/Models/UploadProgress.cs',
                'template'      => 'dotnet/src/Appwrite/Models/UploadProgress.cs.twig',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/src/{{ spec.title | caseUcfirst }}/Models/InputFile.cs',
                'template'      => 'dotnet/src/Appwrite/Models/InputFile.cs.twig',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/src/{{ spec.title | caseUcfirst }}/Services/Service.cs',
                'template'      => 'dotnet/src/Appwrite/Services/Service.cs.twig',
            ],
            [
                'scope'         => 'service',
                'destination'   => '/src/{{ spec.title | caseUcfirst }}/Services/{{service.name | caseUcfirst}}.cs',
                'template'      => 'dotnet/src/Appwrite/Services/ServiceTemplate.cs.twig',
            ],
            [
                'scope'         => 'definition',
                'destination'   => '/src/{{ spec.title | caseUcfirst }}/Models/{{ definition.name | caseUcfirst | overrideIdentifier }}.cs',
                'template'      => 'dotnet/src/Appwrite/Models/Model.cs.twig',
            ]
        ];
    }
}
