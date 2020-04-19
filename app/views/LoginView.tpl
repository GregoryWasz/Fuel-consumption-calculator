{extends file="main.tpl"}
{block name = content}

    <!-- Forms -->
    <section class="wrapper style1">
        <div class="container">
            <div class="row gtr-200">
                <section class="col-6 col-12-narrower">
                    <h3 style = "margin-bottom: 5px">Logowanie do systemu</h3>
                    <form action="{$conf->action_url}login" method="post">
                        <div class="row gtr-50">
                            <div class="col-12">
                                <h4>Login:</h4>
                                <input type="text" name="login" id="id_login" placeholder="Login" />
                            </div>
                            <div class="col-12">
                                <h4>Hasło:</h4>
                                <input type="text" name="pass" id="id_pass" placeholder="Password" "/>
                            </div>
                            <div class="col-12">
                                <ul class="actions">
                                    <li><input type="submit" class="button alt" value="Zaloguj" /></li>
                                </ul>
                            </div>

                        </div>
                    </form>
                </section>
                <div class="col-6 col-12-narrower">
                    {* wyświeltenie listy błędów, jeśli istnieją *}
                    {if $msgs->isError()}
                            <h4 style = "margin-bottom: 5px">Wystąpiły błędy: </h4>
                            <div style=" padding: 10px; border-radius: 5px; background-color: #ff4468; width:100%;">
                            <ol style ="margin: 0">
                                {foreach  $msgs->getErrors() as $err}
                                    {strip}
                                        <li>{$err}</li>
                                    {/strip}
                                {/foreach}
                            </ol>
                            </div>
                    {/if}

                    {* wyświeltenie listy informacji, jeśli istnieją *}
                    {if $msgs->isInfo()}
                            <h4 style = "margin-bottom: 5px">Informacje: </h4>
                            <div style=" padding: 10px; border-radius: 5px; background-color: #1bff12; width:100%;">
                            <ol style ="margin: 0">
                                {foreach $msgs->getInfos() as $inf}
                                    {strip}
                                        <li>{$inf}</li>
                                    {/strip}
                                {/foreach}
                            </ol>
                            </div>
                    {/if}

                </div>
            </div>
        </div>
    </section>

{/block}
