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
            // Package
            [
                'scope'         => 'default',
                'destination'   => 'CHANGELOG.md',
                'template'      => 'unity3d/CHANGELOG.md.twig',
            ],
            [
                'scope'         => 'copy',
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
                'scope'         => 'copy',
                'destination'   => 'LICENSE.md.meta',
                'template'      => 'unity3d/LICENSE.md.meta',
            ],
            [
                'scope'         => 'default',
                'destination'   => 'package.json',
                'template'      => 'unity3d/package.json.twig',
            ],
            [
                'scope'         => 'copy',
                'destination'   => 'package.json.meta',
                'template'      => 'unity3d/package.json.meta',
            ],
            [
                'scope'         => 'default',
                'destination'   => 'README.md',
                'template'      => 'unity3d/README.md.twig',
            ],
            [
                'scope'         => 'copy',
                'destination'   => 'README.md.meta',
                'template'      => 'unity3d/README.md.meta',
            ],
            [
                'scope'         => 'copy',
                'destination'   => 'Runtime.meta',
                'template'      => 'unity3d/Runtime.meta',
            ],
            // Document
            [
                'scope'         => 'method',
                'destination'   => 'Documentation~/examples/{{service.name | caseLower}}/{{method.name | caseDash}}.md',
                'template'      => 'unity3d/Documentation~/example.md.twig',
            ],
            // Runtime
            [
                'scope'         => 'copy',
                'destination'   => '/Runtime/Appwrite.asmdef',
                'template'      => 'unity3d/Runtime/Appwrite.asmdef',
            ],
            [
                'scope'         => 'copy',
                'destination'   => '/Runtime/Appwrite.asmdef.meta',
                'template'      => 'unity3d/Runtime/Appwrite.asmdef.meta',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/Runtime/Client.cs',
                'template'      => 'unity3d/Runtime/Client.cs.twig',
            ],
            [
                'scope'         => 'copy',
                'destination'   => '/Runtime/Client.cs.meta',
                'template'      => 'unity3d/Runtime/Client.cs.meta',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/Runtime/AppwriteException.cs',
                'template'      => 'unity3d/Runtime/AppwriteException.cs.twig',
            ],
            [
                'scope'         => 'copy',
                'destination'   => '/Runtime/AppwriteException.cs.meta',
                'template'      => 'unity3d/Runtime/AppwriteException.cs.meta',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/Runtime/ID.cs',
                'template'      => 'unity3d/Runtime/ID.cs.twig',
            ],
            [
                'scope'         => 'copy',
                'destination'   => '/Runtime/ID.cs.meta',
                'template'      => 'unity3d/Runtime/ID.cs.meta',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/Runtime/Permission.cs',
                'template'      => 'unity3d/Runtime/Permission.cs.twig',
            ],
            [
                'scope'         => 'copy',
                'destination'   => '/Runtime/Permission.cs.meta',
                'template'      => 'unity3d/Runtime/Permission.cs.meta',
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
                'scope'         => 'copy',
                'destination'   => '/Runtime/Role.cs.meta',
                'template'      => 'unity3d/Runtime/Role.cs.meta',
            ],
            [
                'scope'         => 'default',
                'destination'   => '/Runtime/Extensions/Extensions.cs',
                'template'      => 'unity3d/Runtime/Extensions/Extensions.cs.twig',
            ],
            [
                'scope'         => 'copy',
                'destination'   => '/Runtime/Extensions/Extensions.cs.meta',
                'template'      => 'unity3d/Runtime/Extensions/Extensions.cs.meta',
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
            ],
            // Test
            [
                'scope'         => 'copy',
                'destination'   => 'Tests.meta',
                'template'      => 'unity3d/Tests.meta',
            ],
            [
                'scope'         => 'copy',
                'destination'   => '/Tests/Editor.meta',
                'template'      => 'unity3d/Tests/Editor.meta',
            ],
            [
                'scope'         => 'copy',
                'destination'   => '/Tests/Editor/AppwriteEditor.Tests.asmdef',
                'template'      => 'unity3d/Tests/Editor/AppwriteEditor.Tests.asmdef',
            ],
            [
                'scope'         => 'copy',
                'destination'   => '/Tests/Editor/AppwriteEditor.Tests.asmdef.meta',
                'template'      => 'unity3d/Tests/Editor/AppwriteEditor.Tests.asmdef.meta',
            ],
            [
                'scope'         => 'copy',
                'destination'   => '/Tests/Runtime.meta',
                'template'      => 'unity3d/Tests/Runtime.meta',
            ],
            [
                'scope'         => 'copy',
                'destination'   => '/Tests/Runtime/Appwrite.Tests.asmdef',
                'template'      => 'unity3d/Tests/Runtime/Appwrite.Tests.asmdef',
            ],
            [
                'scope'         => 'copy',
                'destination'   => '/Tests/Runtime/Appwrite.Tests.asmdef.meta',
                'template'      => 'unity3d/Tests/Runtime/Appwrite.Tests.asmdef.meta',
            ],
        ];
    }
}
