<?php include ("header.php") ?>

    <div class="container header">
        <div class="row">
            <h1>CSS Фоны</h1>
        </div>
    </div>

    <div class="container body">
        <div class="row">
            <h1>
                Размер фона
            </h1>
            <p>
                По умолчанию браузер не меняет размеры фонового изображения. Как быть, если нужно задать фону другие
                ширину и высоту или привязать его размеры к размерам родительского блока?
                <br>
                Для этого существует свойство background-size. Оно принимает в качестве значения два аргумента:
                первый — это ширина фонового изображения, второй — его высота. Второй аргумент необязательный.
                Если высота не указывается, то она определяется автоматически в зависимости от ширины и исходных пропорций.
                По умолчанию оба аргумента равны auto.
            </p>

            <pre>
                <code class="css">
                    background-size: auto auto;   /* исходные ширина и высота изображения */
                    background-size: 100px;       /* ширина 100px, высота пропорциональная */
                    background-size: 100px 200px; /* ширина 100px, высота 200px */
                </code>
            </pre>
            <p>
                Ещё два значения свойства background-size — это contain и cover.
                Значение contain работает так:
            </p>
            <ul>
                <li>пропорции изображения сохраняются;</li>
                <li>изображению задаются максимально возможные размеры, при которых оно и по ширине, и по высоте полностью помещается в границы фона;</li>
                <li>изображение может не закрывать всю фоновую область блока, если пропорции изображения и блока разные.</li>
            </ul>
            <p>
                Значение cover работает иначе:
            </p>
            <ul>
                <li>пропорции изображения сохраняются;</li>
                <li>изображению задаются минимально возможные размеры, при которых оно закроет всю фоновую область блока;</li>
                <li>если пропорции изображения и блока разные, то часть изображения обрезается.</li>
            </ul>
        </div>

        <div class="row">
            <h1>
                Границы фона
            </h1>
            <p>
                Ещё одно фоновое свойство — background-origin. Оно задаёт расположение и размеры области отображения
                фонового изображения и принимает три значения: padding-box,border-box и content-box.
            </p>

            <div class="image">
                <img src="image/background-origin.jpg">
            </div>

            <p>
                Значение по умолчанию — padding-box. При этом значении область отображения фонового изображения
                соответствует внутренней области блока, не включая рамки.
                <br><br>
                При content-box область отображения соответствует только области содержимого, не включая рамки и внутренние отступы.
                <br><br>
                При border-box область отображения соответствует полному размеру блока, включая и рамки. Фоновое
                изображение начинается от внешнего края блока и закрывается рамками, если они заданы.
            </p>
        </div>

        <div class="row">
            <h1>
                Обрезка фона
            </h1>
            <p>
                Свойство background-clip управляет тем, как обрезается фон. Причём обрезаются не только фоновые изображения, но и фоновый цвет.
                <br><br>
                Значения свойства такие же, как у background-origin: padding-box, border-box иcontent-box.
            </p>
            <div class="image">
                <img src="image/background-origin.jpg">
            </div>
            <p>
                Значение border-box задано по умолчанию, при этом фоновое изображение совсем не обрезается.
                <br><br>
                Значение padding-box обрежет фон по внутреннему краю области рамки.
                <br><br>
                Значение content-box обрежет фон по краю области содержимого.
            </p>
        </div>

        <div class="row">
            <h1>
                Множественный фон
            </h1>
            <p>
                Можно задать блоку несколько фоновых изображений одновременно. Для этого пути к изображениям в свойстве
                background-image или background перечисляются через запятую:
            </p>
            <pre>
                <code class="css">
                    background-image: url("image-1.png"), url("image-2.png");
                </code>
            </pre>
            <p>
                При этом выше будет то изображение, которое находится раньше в списке: image-1.pngв примере будет выше image-2.png.
                <br><br>
                Значения других свойств для множественных фоновых изображений тоже задаются через запятую. Порядок значений должен соответстовать порядку фоновых картинок. Например:
            </p>
            <pre>
                <code class="css">
                    /* для первой картинки масштабирование contain, для второй — 100px */
                    background-size: contain, 100px;

                    /* для первой картинки позиционирование top, для второй — 100% */
                    background-position: top, 100%;
                </code>
            </pre>
        </div>

        <div class="row">
            <h1>
                Позиция фона от разных сторон
            </h1>
            <p>
                Интересная возможность background-position, о которой мы раньше не рассказывали — расположение фона
                можно задавать относительно любого угла блока, а не только от левого верхнего.
                <br><br>
                Поддержка данных значений свойства background-position в современных браузерах <a href="http://caniuse.com/#feat=css-background-offsets" target="_blank">практически полная</a>.
                <br><br>
                Чтобы указать от какой стороны отсчитывать расположение фона, нужно перед значением координат задать
                ключевые слова: top, right, bottom или left. Например:
            </p>
            <pre>
                <code class="css">
                    /* по умолчанию координаты задаются для левого верхнего угла */
                    background-position: 10px 50px; /* слева 10px, сверху 50px */

                    background-position: right 30px bottom 60px; /* справа 30px, снизу 60px */
                    background-position: left 50px bottom 10px; /* слева 50px, снизу 10px */
                    background-position: right 40px top 30px; /* справа 40px, сверху 30px */
                </code>
            </pre>
        </div>

        <div class="row">
            <h1>
                Повторение фона: background-repeat
            </h1>
            <p>
                Два интересных, но малоизвестных значения привычного свойства background-repeat, которое задаёт
                повторение фона, — это round и space.
                <br><br>
                Значение свойства по умолчанию background-repeat: repeat просто повторяет фоновую картинку по всей
                ширине и высоте блока. Если части повторяющейся картинки не помещаются в ширину блока, то они просто обрезаются.
                <br><br>
                Если задать значение background-repeat: round, то повторяющиеся картинки по краям блока обрезаться не
                будут, а равномерно растянутся или сожмутся по всей ширине, чтобы занять оставшееся пространство.
                <br><br>
                Кстати, background-repeat принимает в качестве значения два аргумента: режим повторения по горизонтали
                и по вертикали. Если передать один параметр, то он применится к обоим направлениям. Например:
            </p>
            <pre>
                <code class="css">
                    /* повторение фона repeat по горизонтали и вертикали */
                    background-repeat: repeat;

                    /* повторение фона round по горизонтали и repeat по вертикали */
                    background-repeat: round repeat;
                </code>
            </pre>
            <p>
                Режим повторения фона background-repeat: space похож на round, при нём части картинки тоже не обрезаются.
                Отличие в том, что повторяющиеся фоновые картинки не сжимаются или растягиваются, а для компенсации
                ширины блока между ними добавляется пустое пространство.
            </p>
        </div>

    </div>



<?php include ("footer.php") ?>