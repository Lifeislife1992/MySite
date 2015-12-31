<?php include ("header.php") ?>

<div class="container header">
    <div class="row">
        <h1>Шапка на Bootstrap</h1>

    </div>
</div>
<div class="container body">
    <div class="row">



        <pre>
            <code class="html">
                container-fluid - растянутый на всю ширину блок (резиновый)
                &ltdiv class="container-fluid"&gt
                    &ltdiv class="row"&gt

                        Блок самого меню
                        &ltdiv class="navbar navbar-inverse navbar-fixed-top"&gt
                            &ltdiv class="container"&gt

                                Тут все помимо самих пунктов (Лого, название, кнопка "сэндвич")
                                &ltdiv class="navbar-header"&gt

                                    Кнопка "сэндвич". data-target="#responsive-menu - привязывает кнопку к меню с соответствующим ID
                                    &ltbutton type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu"&gt
                                        &ltspan class="icon-bar"&gt&lt/span&gt
                                        &ltspan class="icon-bar"&gt&lt/span&gt
                                        &ltspan class="icon-bar"&gt&lt/span&gt
                                    &lt/button&gt
                                    &lta href="index.php" class="navbar-brand"&gtMySite&lt/a&gt
                                &lt/div&gt

                                Блок с самим меню
                                &ltdiv class="collapse navbar-collapse" id="responsive-menu"&gt
                                    &ltul class="nav navbar-nav"&gt

                                        dropdown - отвечает за выпадашку в пункте, class="caret" - треугольничек выпадашки
                                        &ltli class="dropdown"&gt
                                            &lta href="#" class="dropdown-toggle" data-toggle="dropdown"&gtJavaScript&ltb class="caret"&gt&lt/b&gt&lt/a&gt

                                            Список подменю
                                            &ltul class="dropdown-menu"&gt
                                                &ltli&gt&lta href="dictionary.php"&gtСловарь терминов&lt/a&gt&lt/li&gt
                                                &ltli&gt&lta href="#"&gtpp2&lt/a&gt&lt/li&gt
                                                &ltli&gt&lta href="#"&gtpp3&lt/a&gt&lt/li&gt
                                            &lt/ul&gt
                                        &lt/li&gt
                                        &ltli class="dropdown"&gt
                                            &lta href="#" class="dropdown-toggle" data-toggle="dropdown"&gtBootstrap&ltb class="caret"&gt&lt/b&gt&lt/a&gt
                                            &ltul class="dropdown-menu"&gt
                                                &ltli&gt&lta href="bootstrap-responsive-header.php"&gtШапка на Bootstrap&lt/a&gt&lt/li&gt
                                                &ltli&gt&lta href="#"&gtpp2&lt/a&gt&lt/li&gt
                                                &ltli&gt&lta href="#"&gtpp3&lt/a&gt&lt/li&gt
                                            &lt/ul&gt
                                        &lt/li&gt
                                        &ltli class="dropdown"&gt
                                            &lta href="#" class="dropdown-toggle" data-toggle="dropdown"&gtp3&ltb class="caret"&gt&lt/b&gt&lt/a&gt
                                            &ltul class="dropdown-menu"&gt
                                                &ltli&gt&lta href="#"&gtpp1&lt/a&gt&lt/li&gt
                                                &ltli&gt&lta href="#"&gtpp2&lt/a&gt&lt/li&gt
                                                &ltli&gt&lta href="#"&gtpp3&lt/a&gt&lt/li&gt
                                            &lt/ul&gt
                                        &lt/li&gt
                                        &ltli class="dropdown"&gt
                                            &lta href="#" class="dropdown-toggle" data-toggle="dropdown"&gtp4&ltb class="caret"&gt&lt/b&gt&lt/a&gt
                                            &ltul class="dropdown-menu"&gt
                                                &ltli&gt&lta href="#"&gtpp1&lt/a&gt&lt/li&gt
                                                &ltli&gt&lta href="#"&gtpp2&lt/a&gt&lt/li&gt
                                                &ltli&gt&lta href="#"&gtpp3&lt/a&gt&lt/li&gt
                                            &lt/ul&gt
                                        &lt/li&gt
                                    &lt/ul&gt
                                &lt/div&gt
                            &lt/div&gt
                        &lt/div&gt
                    &lt/div&gt
                &lt/div&gt
            </code>
        </pre>



    </div>
</div>

<?php include ("footer.php") ?>