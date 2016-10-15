{include file="headerMyS.tpl"}

{if isset($key_error)}
  {if ($key_error)}
    {include file="navMyS.tpl"}
  {else}
    {include file="navAdmin.tpl"}
  {/if}
{else}
{include file="navMyS.tpl"}
{/if}

<article>
  <div id="contenido">
  </div>
</article>
{include file="footerMyS.tpl"}
