{extends file="main.tpl"}
{block name = content}

    <!-- Forms -->
    <section class="wrapper style1">
        <div class="container">
            <div class="row gtr-200">
                <section class="col-6 col-12-narrower">
                    <h2 style ="margin-bottom: 5px">Twoje ostatnie wyniki</h2>
                    {* wyświeltenie bazy danych, jeśli istnieje *}
                    {if $database != NULL}
                    <div style=" padding: 5px;  border-radius: 5px; background-color: #0fff1c; ">
                            {if $datas == null}
                                <div style=" padding: 5px;  margin: 10px; border-radius: 5px; background-color: #ffffff; ">
                                    Brak danych do wyświetlenia
                                </div>

                            {/if}
                            {foreach  $datas as $data}
                                {strip}
                                <div style=" padding: 5px;  margin: 10px; border-radius: 5px; background-color: #ffffff; ">
                                        <ul style="margin: 5px;">
                                            <li>Długość: {$data["dlugosc"]}</li>
                                            <li>Średnia: {$data["srednia"]}</li>
                                            <li>Cena: {$data["cena"]}</li>
                                            <li>Koszt: {$data["koszt"]}</li>
                                            <li>Data: {$data["data"]}</li>
                                        </ul>
                                </div>
                                {/strip}
                            {/foreach}

                    </div>
                    {/if}
                    <h5 style ="margin-bottom: 5px">Użytkownik: {$user->login}<br> Rola: {$user->role}</h5>


                        <div class="row gtr-50">
                            <div class="col-12">
                                <ul class="actions">
                                    <li> <a href="{$conf->action_url}calcShow"  class="button alt">Wróć</a> </li>
                                    <li> <a href="{$conf->action_url}logout"  class="button alt">Wyloguj</a> </li>
                                </ul>
                            </div>
                        </div>
                </section>
                <div class="col-6 col-12-narrower">
                    {* wyświeltenie listy błędów, jeśli istnieją *}
                    {if $msgs->isError()}
                            <h3>Wystąpiły błędy: </h3>
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
                </div>
            </div>
        </div>
    </section>

{/block}
