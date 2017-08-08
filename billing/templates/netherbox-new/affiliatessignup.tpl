{if $affiliatesystemenabled}

{include file="$template/pageheader.tpl" title=$LANG.affiliatesactivate}

<h2>{$LANG.affiliatesignuptitle}</h2>

<p>{$LANG.affiliatesignupintro}</p>

<ul>
<li>{$LANG.affiliatesignupinfo1}</li>
<li>{$LANG.affiliatesignupinfo2}</li>
<li>{$LANG.affiliatesignupinfo3}</li>
</ul>

<form method="post" action="affiliates.php">
<input type="hidden" name="activate" value="true" />
<p align="center"><input type="submit" value="{$LANG.affiliatesactivate}" class="btn btn-success" /></p>
</form>

{else}

{include file="$template/pageheader.tpl" title=$LANG.affiliatestitle}

<div class="alert alert-warning">
    <p>{$LANG.affiliatesdisabled}</p>
</div>

{/if}