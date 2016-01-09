<?php include ("header.php") ?>

<div class="container header">
    <div class="row">
        <h1>CSS Таблицы</h1>
    </div>
</div>

<div class="container body">
    <div class="row">
        <p>Чтобы из любого элемента сделать таблицу в CSS, нужно его свойству display присвоить значение table.</p>
        <pre>
            <code class="css">
                .this-is-table {
                    display: table;
                }
            </code>
        </pre>
        <p>В этом случае блок .this-is-table станет отображаться равнозначно тегу table.</p>
        <p>
            Мы можем одновременно и иметь семантическую разметку, и отображать её таблицей, если захотим. А в случае
            необходимости, можно просто отменить display: table, назначив другое подходящее значение display: например,
            block. Это ключевое преимущество перед HTML-таблицами, у которых изменить отображение на «нетабличное» нельзя.
            <br><br>
            Давайте продолжим разбираться с таблицей и полками. У HTML-таблиц есть ряды tr и ячейки td. Их аналоги в мире
            CSS-таблиц — значения свойства display: table-row и table-cell.
        </p>
        <pre>
            <code class="css">
                .this-is-table-row {
                    display: table-row;
                }
                .this-is-table-cell {
                    display: table-cell;
                }
            </code>
        </pre>
        <p>Ячейки включаются в ряды, ряды в саму таблицу.</p>



        <h1>Заголовок caption</h1>
        <p>Его представление в CSS:</p>
        <pre>
            <code class="css">
                .this-is-caption {
                    display: table-caption;
                }
            </code>
        </pre>
        <p>
            В HTML-таблице тег заголовка располагается внутри неё, в CSS-таблице это так же.
            <br><br>
            Также к заголовкам CSS-таблиц применимо свойство для вертикального позиционирования заголовка таблицы caption-side.
        </p>
        <pre>
            <code class="css">
                .checklist h1{
                    display: table-caption;
                    caption-side: bottom;
                }
            </code>
        </pre>



        <h1>Шапка, тело, подвал таблицы</h1>
        <p>
            В HTML-таблицах можно группировать табличные ряды «шапки», основного содержания и «подвала».
            <br><br>
            Для группировки верхних рядов используется тег thead. В него включаются один или несколько рядов.
            Можно использовать несколько элементов thead одновременно.
            <br><br>
            Аналог группировки верхних рядов в CSS — свойство display: table-header-group. Отметим, что блок, которому
            задано это свойство, всегда отображается вверху CSS-таблицы, даже если в разметке он идёт не первым.
            Это поведение идентично тегу thead.
        </p>
        <p>
            Аналогично «шапке» у таблицы можно сделать «подвал».
            <br><br>
            В HTML-таблицах это тег tfoot, а в CSS — свойство display: table-footer-group. Как и в случае «шапки»,
            в таблицу можно включать несколько «подвалов» одновременно.
            <br><br>
            Аналогично «шапке», блок, которому задано свойство display: table-footer-group, всегда отображается снизу
            CSS-таблицы, даже если в разметке он идёт не последним. Это поведение идентично тегу tfoot.
        </p>
        <p>
            Ряды содержания таблицы в HTML включаются в тег tbody. В CSS же эту задачу выполняет свойство display: table-row-group.
            <br><br>
            Дополнительные обёртки очень удобны для стилизации элементов таблицы.
        </p>



        <h1>Сравнение CSS и HTML таблиц</h1>
        <p>Пример таблицы на HTML:</p>
        <pre>
            <code class="html">
                &lt;table&gt;
                    &lt;caption&gt;Вещи в дорогу&lt;/caption&gt;
                    &lt;thead&gt;
                        &lt;tr&gt;&hellip;&lt;/tr&gt;
                    &lt;/thead&gt;
                    &lt;tbody class=&quot;content&quot;&gt;
                        &lt;tr&gt;&hellip;&lt;/tr&gt;
                    &lt;/tbody&gt;
                    &lt;tbody class=&quot;content content-important&quot;&gt;
                        &lt;tr&gt;&hellip;&lt;/tr&gt;
                    &lt;/tbody&gt;
                    &lt;tfoot&gt;
                        &lt;tr&gt;&hellip;&lt;/tr&gt;
                    &lt;/tfoot&gt;
                &lt;/table&gt;
            </code>
        </pre>
        <p>Пример таблицы на CSS (разметка):</p>
        <pre>
            <code class="html">
                &lt;article class=&quot;checklist united&quot;&gt;
                    &lt;h1&gt;Вещи в дорогу&lt;/h1&gt;
                    &lt;div class=&quot;column&quot;&gt;&lt;/div&gt;
                    &lt;div class=&quot;column-group&quot;&gt;
                        &lt;div class=&quot;column&quot;&gt;&lt;/div&gt;
                        &lt;div class=&quot;column&quot;&gt;&lt;/div&gt;
                        &lt;div class=&quot;column&quot;&gt;&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;header&gt;
                        &lt;ul&gt;
                            &lt;li&gt;&lt;img src=&quot;img/magic-hat.svg&quot; alt=&quot;&quot;&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;img src=&quot;img/hunter-hat.svg&quot; alt=&quot;&quot;&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;img src=&quot;img/boot.svg&quot; alt=&quot;&quot;&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;img src=&quot;img/badge.svg&quot; alt=&quot;&quot;&gt;&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/header&gt;
                    &lt;section class=&quot;content&quot;&gt;
                        &lt;ul&gt;
                            &lt;li&gt;&lt;img src=&quot;img/sword.svg&quot; alt=&quot;&quot;&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;img src=&quot;img/shield.svg&quot; alt=&quot;&quot;&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;img src=&quot;img/stick.svg&quot; alt=&quot;&quot;&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;img src=&quot;img/bow.svg&quot; alt=&quot;&quot;&gt;&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/section&gt;
                    &lt;section class=&quot;content content-important&quot;&gt;
                        &lt;ul&gt;
                            &lt;li&gt;&lt;img src=&quot;img/beer.svg&quot; alt=&quot;&quot;&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;img src=&quot;img/meat.svg&quot; alt=&quot;&quot;&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;img src=&quot;img/wine.svg&quot; alt=&quot;&quot;&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;img src=&quot;img/goblet.svg&quot; alt=&quot;&quot;&gt;&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/section&gt;
                    &lt;footer&gt;
                        &lt;ul&gt;
                            &lt;li&gt;&lt;img src=&quot;img/money.svg&quot; alt=&quot;&quot;&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;img src=&quot;img/blue-crystal.svg&quot; alt=&quot;&quot;&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;img src=&quot;img/green-crystal.svg&quot; alt=&quot;&quot;&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;img src=&quot;img/skull.svg&quot; alt=&quot;&quot;&gt;&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/footer&gt;
                &lt;/article&gt;
            </code>
        </pre>
        <p>Пример таблицы на CSS (стили):</p>
        <pre>
            <code class="css">
                .checklist {
                    display: table;
                }
                .checklist ul {
                    display: table-row;
                }
                .checklist li {
                    display: table-cell;
                }
                .checklist h1 {
                    display: table-caption;
                }
                .checklist header {
                    display: table-header-group;
                }
                .checklist header li {
                    border-color: #3D9970;
                }
                .checklist footer {
                    display: table-footer-group;
                }
                .checklist footer li {
                    border-color: #0074D9;
                }
                .checklist .content {
                    display: table-row-group;
                }
                .checklist .content li {
                    border-color: #FF851B;
                }
                .checklist .content-important li {
                    border-color: #FF4136;
                }
                .column {
                    display: table-column;
                    background-image: url(img/wall-1.png);
                }
                .column-group{
                    display: table-column-group;
                }
                .column-group .column{
                    background-image: url(img/wall-2.png);
                }
            </code>
        </pre>



        <h1>Колонка таблицы</h1>
        <p>
            В HTML-таблицах для стилизации столбцов используется тег col. Тег пишется в начале таблицы и не закрывается.
            Первый col в разметке влияет на каждую первую ячейку в рядах таблицы, то есть, на первый столбец.
            Следующий col будет стилизовать второй столбец и так далее.
            <br><br>
            В примере ниже ячейкам 1.1 и 1.2 (первый столбец) задаётся ширина 20%, а ячейкам 2.1 и 2.2 (второй столбец) ширина — 80%:
        </p>
        <pre>
            <code class="html">
                &lt;table&gt;
                    &lt;col width=&quot;20%&quot;&gt;
                    &lt;col width=&quot;80%&quot;&gt;
                    &lt;tr&gt;
                        &lt;td&gt;1.1&lt;/td&gt; &lt;td&gt;2.1&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;td&gt;1.2&lt;/td&gt; &lt;td&gt;2.2&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/table&gt;
            </code>
        </pre>
        <p>
            В CSS-таблицах всё так же: внутри таблицы нужно создать пустой тег и задать ему свойство display: table-column
            — это аналог тега col. Правила для него будут применяться к первому столбцу, следующий элемент с table-column
            стилизует второй столбец и так далее.
        </p>
        <p>
            Столбцы тоже можно группировать. В HTML-таблицах для этой цели используется тег colgroup. Теги col просто
            включаются в colgroup и стилизуется уже группа целиком, а не отдельные столбцы.
            <br><br>
            В примере ниже ячейкам 1.1 и 1.2 (первый столбец) задаётся ширина 20%, а ячейкам 2.1, 2.2, 3.1 и 3.2
            (второй и третий столбец) ширина — 80%:
        </p>
        <pre>
            <code class="html">
                &lt;table&gt;
                    &lt;col width=&quot;20%&quot;&gt;
                    &lt;colgroup width=&quot;80%&quot;&gt;
                        &lt;col&gt;
                        &lt;col&gt;
                    &lt;/colgroup&gt;
                    &lt;tr&gt;
                        &lt;td&gt;1.1&lt;/td&gt; &lt;td&gt;2.1&lt;/td&gt; &lt;td&gt;3.1&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;td&gt;1.2&lt;/td&gt; &lt;td&gt;2.2&lt;/td&gt; &lt;td&gt;3.2&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/table&gt;
            </code>
        </pre>
        <p>
            В CSS-таблицах столбцы группируются аналогично. Группа столбцов создаётся свойством display: table-column-group
            (аналог тега colgroup). Стилизуя группу, мы задаём правила для каждого дочернего столбца.
        </p>



        <h1>Строчная таблица</h1>
        <p>
            В CSS существуют блочные block и строчные inline элементы. Есть также и блочно-строчные inline-block элементы,
            сочетающие свойства обоих типов.
            <br><br>
            Таблицы при этом имеют свой собственный тип table, но ведут себя в потоке документа как блоки, то есть
            занимают отдельную строку. Существует ли возможность сделать таблицу «строчной», чтобы она располагалась в
            одной строке с другими строчными элементами? Да! И такое поведение таблицы задаётся свойством display: inline-table.
        </p>



        <h1>Горизонтальное выравнивание таблицы</h1>
        <p>
            Лёгкий способ горизонтально отцентровать блок произвольной ширины на странице — присвоить ему отображение таблицей и задать margin: auto.
            <br><br>
            В этом таблица схожа по поведению с обычным блочным элементом с фиксированной шириной, но при этом ширина таблицы может быть динамической.
        </p>
        <pre>
            <code class="css">
                .checklist ul {
                    display: table;
                    margin:auto;
                    width: 200px;
                }
                .checklist li{
                    text-align: center;
                }
            </code>
        </pre>



        <h1>Горизонтальное и вертикальное выравнивание</h1>
        <p>
            Извечная проблема HTML-вёрстки — вертикальное выравнивание элементов. Пользуясь особенностями таблиц можно
            легко отцентровать по вертикали и горизонтали блок произвольной ширины и высоты.
            <br><br>
            Трюк строится на той особенности, что ячейка растягивается на всю ширину таблицы, а содержимое ячейки просто
            центруется внутри неё с помощью свойств text-align и vertical-align. Для этого нужны:
        </p>
        <ul>
            <li>контейнер-таблица display: table;</li>
            <li>ячейка с содержимым display: table-cell;</li>
            <li>горизонтальное и вертикальное выравнивание ячейки внутри таблицы.</li>
        </ul>
        <p>Такой приём удобен, если нужно отцентровать какой-либо блок, например, модальное окно на странице.</p>



        <h1>Ячейки и границы таблицы (схлопывание)</h1>
        <p>
            В CSS-таблицах можно управлять отступами и схлопыванием рамок между ячейками. Для этого, как и у HTML-таблиц,
            используются свойства border-collapse и border-spacing. Свойство border-collapse «схлопывает» границы ячеек,
            а border-spacing — определяет расстояние между ячейками внутри таблицы. Подробно свойства разбираются в
            заданиях «Улучшаем отображение рамок» и «Отступы между ячейками» курса «Знакомство с таблицами».
            <br><br>
            Однако, у свойства border-spacing есть одна тонкость. Если в нём задано одно значение, то расстояние между
            ячейками устанавливается одновременно по вертикали и горизонтали. Если значений два, то первое определяет
            горизонтальное расстояние, а второе — вертикальное.
        </p>
        <pre>
            <code class="css">
                border-collapse: separate;
                border-spacing: 20px;

                border-collapse: collapse;
            </code>
        </pre>
    </div>
</div>

<?php include ("footer.php") ?>