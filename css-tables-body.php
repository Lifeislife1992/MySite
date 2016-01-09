<?php include ("header.php") ?>

<div class="container header">
    <div class="row">
        <h1>Разметка страницы на CSS-таблице</h1>
    </div>
</div>





<div class="container body">
    <div class="row">
        <img src="image/css-tables-body.jpg" alt="">
        <p>
            Так называемая разметка «Holy Grail» — это вариант разметки страницы с шапкой, тремя равными по высоте
            колонками (две фиксированные боковые колонки и тянущийся центр) и прилипающим подвалом. Центральная
            колонка должна тянуться, а боковые — иметь фиксированную ширину, любая колонка может быть больше остальных
            по высоте.
            <br><br>
            Начнём с «прилипающего» подвала. Он назван так, потому что:
        </p>
        <ul>
            <li>«прилипает» к самому низу страницы, когда основное содержимое страницы небольшое и не отталкивает подвал ниже экрана,</li>
            <li>«отлипает», когда высота содержимого становится достаточно большой и влияет на высоту страницы.</li>
        </ul>
        <p>
            Для реализации «прилипающего» подвала воспользуемся CSS-таблицами. Для начала зададим главному контейнеру табличное отображение и 100% ширину и высоту.
            <br><br>
            Чтобы блок был 100% высоты области просмотра, всем его родительским элементам (в нашем случае html и body) тоже должна быть задана 100% высота.
            <br><br>
            Теперь давайте шапку и подвал сделаем рядами нашей табличной разметки. Это даст особый эффект: ряды
            растянутся и заполнят всю ширину и высоту таблицы, а последний ряд выровняется по нижней части таблицы — это то, что нам нужно.
            <br><br>
            Теперь остаётся только задать нужную высоту шапки и подвала. Её можно задать минимально необходимой,
            например, будет достаточно 1px. В результате вычисленная высота ряда станет минимальной, но не будет меньше
            высоты его содержимого.
            <br><br>
            Таким образом, наш «прилипающий» подвал будет работать как следует.
        </p>
        <p>
            Теперь разберёмся со столбцами нашей разметки.
            <br><br>
            Блок main также отобразим таблицей, вложенной в .table-layout. Дочерние блоки main сделаем ячейками таблицы,
            чтобы расположить их в ряд. И, наконец, растянем main на 100% доступной ширины и высоты, и вместе с main растянутся ячейки.
            <br><br>
            Такая разметка main очень гибкая: можно без проблем менять ширину боковых столбцов, при этом основная колонка
            будет занимать всю оставшуюся ширину.
        </p>
        <h1>Пример кода (html):</h1>
        <pre>
            <code class="html">
                &lt;!DOCTYPE html&gt;
                &lt;html&gt;
                    &lt;head&gt;
                        &lt;title&gt;Holy Grail, часть 3&lt;/title&gt;
                        &lt;meta charset=&quot;utf-8&quot;&gt;
                        &lt;base href=&quot;/assets/course86/&quot;&gt;
                        &lt;link href=&quot;course.css&quot; rel=&quot;stylesheet&quot;&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;div class=&quot;table-layout&quot;&gt;
                            &lt;header&gt;
                                &lt;h1&gt;Кексогалерея&lt;/h1&gt;
                            &lt;/header&gt;
                            &lt;main&gt;
                                &lt;div class=&quot;side&quot;&gt;
                                    &lt;p&gt;Левая колонка&lt;/p&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;content&quot;&gt;
                                    &lt;p&gt;Основная колонка&lt;/p&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;side&quot;&gt;
                                    &lt;p&gt;Правая колонка&lt;/p&gt;
                                &lt;/div&gt;
                            &lt;/main&gt;
                            &lt;footer class=&quot;sticky-footer&quot;&gt;
                                &lt;img class=&quot;footer-logo&quot; src=&quot;/assets/course74/keks.jpg&quot; alt=&quot;&quot;&gt;
                                &lt;p class=&quot;copyright&quot;&gt;2015 Cat Energy&lt;/p&gt;
                                &lt;p class=&quot;author&quot;&gt;Keks, keks@htmlacademy.ru&lt;/p&gt;
                            &lt;/footer&gt;
                        &lt;/div&gt;
                    &lt;/body&gt;
                &lt;/html&gt;
            </code>
        </pre>
        <h1>Пример кода (css):</h1>
        <pre>
            <code class="css">
                html,
                body {
                    height: 100%;
                }
                .table-layout {
                    display: table;
                    width: 100%;
                    height: 100%;
                }
                header,
                footer {
                    display: table-row;
                    height: 1px;
                }
                main {
                    border-spacing: 10px;
                    display: table;
                    width:100%;
                    height:100%;
                }
                .side, .content{
                    display: table-cell;
                }
                .side{
                    width:100px;
                }
            </code>
        </pre>
    </div>
</div>


<?php include ("footer.php") ?>