
{* file to extend *}
{extends file='parent:frontend/index/logo-container.tpl'}

{* set namespace *}
{namespace name="frontend/index/logo-container"}



{* ... *}
{block name='frontend_index_logo'}
    <div class="logo--shop block">
        <a class="logo--link" href="http://intranet-apswit11/verkaufsassistent/forceredirect/ostermann" title="{"{config name=shopName}"|escapeHtml} - {"{s name='IndexLinkDefault' namespace="frontend/index/index"}{/s}"|escape}">
            <picture>
                <source srcset="{link file=$theme.desktopLogo}" media="(min-width: 78.75em)">
                <source srcset="{link file=$theme.tabletLandscapeLogo}" media="(min-width: 64em)">
                <source srcset="{link file=$theme.tabletLogo}" media="(min-width: 48em)">
                <img srcset="{link file=$theme.mobileLogo}" alt="{"{config name=shopName}"|escapeHtml} - {"{s name='IndexLinkDefault' namespace="frontend/index/index"}{/s}"|escape}" />
            </picture>
        </a>
    </div>
{/block}