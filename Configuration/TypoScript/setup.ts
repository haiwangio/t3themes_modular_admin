#<INCLUDE_TYPOSCRIPT: source="DIR:EXT:t3themes_modular_admin/Configuration/TypoScript/Setup/" extensions="ts,txt,typoscript">

#### PAGE
page = PAGE
page {
    typeNum = 0
    #shortcutIcon = {$website.shortcutIcon}
    10 = FLUIDTEMPLATE
    10 {
        templateName = TEXT
        templateName.stdWrap.cObject = CASE
        templateName.stdWrap.cObject {
            key.data = pagelayout

            pagets__modular_adminclean = TEXT
            pagets__modular_adminclean.value = Default

            default = TEXT
            default.value = Default
        }

        templateRootPaths.0 = EXT:t3themes_modular_admin/Resources/Private/Templates/Page/
        partialRootPaths.0 = EXT:t3themes_modular_admin/Resources/Private/Partials/Page/
        layoutRootPaths.0 = EXT:t3themes_modular_admin/Resources/Private/Layouts/Page/

        ### DATA PREPROCESSING
        dataProcessing {
            10 = TYPO3\CMS\Frontend\DataProcessing\MenuProcessor
            10 {
                levels = 2
                includeSpacer = 1
                as = mainnavigation
            }
            20 = TYPO3\CMS\Frontend\DataProcessing\MenuProcessor
            20 {
                entryLevel = 1
                levels = 2
                expandAll = 0
                includeSpacer = 1
                as = subnavigation
            }
            30 = SalvatoreEckel\T3cms\DataProcessing\T3themesConfProcessor
            30 {
                fieldName = t3themes_conf
                as = t3themesConf
                rootpageId = TEXT
                rootpageId {
                    insertData = 1
                    data = leveluid : 0
                }
            }
        }

        ### VARIABLES
        variables {
            pageTitle = TEXT
            pageTitle.data = page:title
            rootPage = TEXT
            rootPage.data = leveluid:0
        }
    }
    meta {
        viewport = width=device-width, initial-scale=1, shrink-to-fit=no
        keywords.data = DB:pages:1:keywords 
        keywords.override.field = keywords 
        description.data = DB:pages:1:description 
        description.override.field = description 
        abstract.data = DB:pages:1:abstract 
        abstract.override.field = abstract 
        author.data = DB:pages:1:author 
        author.override.field = author
        web_author.data = DB:pages:1:author 
        web_author.override.field = author
    }

    #includeCSSLibs {}
    includeCSS {
        vendor = EXT:t3themes_modular_admin/Resources/Public/css/vendor.css
    }
    #includeJSLibs {}
    includeJSFooterlibs {
        vendor = EXT:t3themes_modular_admin/Resources/Public/js/vendor.js
        vendor.forceOnTop = 1
        app = EXT:t3themes_modular_admin/Resources/Public/js/app.js
    }
    #jsFooterInline {}
    headerData {
		12 = TEXT
		12.value = <script>var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) : {};var themeName = themeSettings.themeName || '';if (themeName){document.write('<link rel="stylesheet" id="theme-style" href="/typo3conf/ext/t3themes_modular_admin/Resources/Public/css/app-' + themeName + '.css">');}else{document.write('<link rel="stylesheet" id="theme-style" href="/typo3conf/ext/t3themes_modular_admin/Resources/Public/css/app.css">');}</script>
    }
}
