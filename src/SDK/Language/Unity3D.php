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
                'destination'   => '/Runtime/Client.cs',
                'template'      => 'unity3d/Runtime/Client.cs.twig',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/Runtime/{{ spec.title | caseUcfirst }}Exception.cs',
                'template'      => 'unity3d/Runtime/Exception.cs.twig',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/Runtime/ID.cs',
                'template'      => 'unity3d/Runtime/ID.cs.twig',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/Runtime/Permission.cs',
                'template'      => 'unity3d/Runtime/Permission.cs.twig',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/Runtime/Query.cs',
                'template'      => 'unity3d/Runtime/Query.cs.twig',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/Runtime/Role.cs',
                'template'      => 'unity3d/Runtime/Role.cs.twig',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/Runtime/Extensions/Extensions.cs',
                'template'      => 'unity3d/Runtime/Extensions/Extensions.cs.twig',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/Runtime/Models/OrderType.cs',
                'template'      => 'unity3d/Runtime/Models/OrderType.cs.twig',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/Runtime/Models/UploadProgress.cs',
                'template'      => 'unity3d/Runtime/Models/UploadProgress.cs.twig',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/Runtime/Models/InputFile.cs',
                'template'      => 'unity3d/Runtime/Models/InputFile.cs.twig',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/Runtime/Services/Service.cs',
                'template'      => 'unity3d/Runtime/Services/Service.cs.twig',
            ],
            [
                'scope'         => 'service',
                'destination'   => '/Runtime/Services/{{service.name | caseUcfirst}}.cs',
                'template'      => 'unity3d/Runtime/Services/ServiceTemplate.cs.twig',
            ],
            [
                'scope'         => 'definition',
                'destination'   => '/Runtime/Models/{{ definition.name | caseUcfirst | overrideIdentifier }}.cs',
                'template'      => 'unity3d/Runtime/Models/Model.cs.twig',
            ]
        ];
    }
}
