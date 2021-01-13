<?php

$redirectsMapping = [
    'blog/2019/05/21/review-of-the-refactoring' => 'https://svatasimara.medium.com/book-review-refactoring-ceb76a67752b',
    'blog/2020/08/21/review-architecture' => 'https://svatasimara.medium.com/review-of-the-advanced-web-application-architecture-c2afc0f0de1',
    'blog/2019/06/02/logic-belongs-to-entities' => 'https://svatasimara.medium.com/logic-belongs-to-entities-1333bff0b945',
    'blog/2019/05/06/single-responsibility-principle-back-to-basics-or-over-engineering' => 'https://svatasimara.medium.com/single-responsibility-principle-back-to-basics-or-over-engineering-3d64869659f8',
    'blog/2018/04/18/orm-wtf' => 'https://svatasimara.medium.com/orm-wtf-9af529f4dab4',
    'blog/2017/12/05/domain-driven-design-language' => 'https://svatasimara.medium.com/domain-driven-design-part-1-language-114d8a7fa7',
    'blog/2017/12/16/domain-driven-design-model' => 'https://svatasimara.medium.com/domain-driven-design-part-2-model-53be4e01c9e2',
    'blog/2018/01/06/domain-driven-design-simplify-object-model' => 'https://svatasimara.medium.com/domain-driven-design-part-3-simplify-object-model-a8b5876f65f5',
    'blog/2018/02/21/domain-driven-design-implementation' => 'https://svatasimara.medium.com/domain-driven-design-part-4-implementation-311b08f25107',
    'blog/2018/02/28/domain-driven-design-repository' => 'https://svatasimara.medium.com/domain-driven-design-part-5-repository-d5ad32b2e06f',
    'blog/2018/03/07/domain-driven-design-doctrine-repository' => 'https://svatasimara.medium.com/domain-driven-design-part-6-doctrine-repository-4a3fc1366bca',
    'blog/2018/03/21/domain-driven-design-alternative-mapping' => 'https://svatasimara.medium.com/domain-driven-design-part-7-alternative-relational-database-mapping-9ddc419685c8',
    'blog/2018/03/28/domain-driven-design-services-factories' => 'https://svatasimara.medium.com/domain-driven-design-part-8-services-and-factories-4c0dec11fdc1',
];

$currentUri = urldecode($_SERVER['REQUEST_URI']);

/** @var string|null $uriPath */
$currentUriPath = trim(parse_url($currentUri, PHP_URL_PATH), '/');

$redirectUrl = 'https://archiv.pehapkari.cz/' . $currentUriPath;

foreach ($redirectsMapping as $originalPath => $newUrl) {
    if (strstr($currentUriPath, $originalPath) !== false) {
        $redirectUrl = $newUrl;
        break;
    }
}

header("Location: $redirectUrl");
exit();
