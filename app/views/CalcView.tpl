{extends file="main.tpl"}
{block name = content}

    <!-- Forms -->
    <section class="wrapper style1">
        <div class="container">
            <div class="row gtr-200">
                <section class="col-6 col-12-narrower">
                    <h3>Kalkulator kosztu przejechania trasy</h3>
                    <form action="{$conf->action_url}calcCompute" method="post">
                        <div class="row gtr-50">
                            <div class="col-12">
                                <input type="text" name="x" id="x" placeholder="Długość planowanej trasy w kilometrach" value="{$form->x}"/>
                            </div>
                            <div class="col-12">
                                <input type="text" name="y" id="y" placeholder="Średnie spalanie w litrach na 100 km" value="{$form->y}"/>
                            </div>
                            <div class="col-12">
                                <input type="text" name="z" id="z" placeholder="Cena litra paliwa"  value="{$form->z}"/>
                            </div>
                            <div class="col-12">
                                <ul class="actions">
                                    <li><input type="submit" class="button alt" value="Licz!" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </section>
                <div class="col-6 col-12-narrower">
                    {* wyświeltenie listy błędów, jeśli istnieją *}
                    {if $msgs->isError()}
                            <h4>Wystąpiły błędy: </h4>
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
                            <h4>Informacje: </h4>
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

                    {if isset($res->result)}
                        <h4>Wynik</h4>
                        <p style="padding: 10px;  border-radius: 5px; background-color: #fff930; width:100%;">
                            {$res->result}
                        </p>
                    {/if}

                </div>
            </div>
        </div>
    </section>

{/block}
