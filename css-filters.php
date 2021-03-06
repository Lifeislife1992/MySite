<?php include ("header.php") ?>

<div class="container header">
    <div class="row">
        <h1>CSS Фильтры</h1>
    </div>
</div>

<div class="container body">
    <div class="row">
        <h1>Яркость и контрастность, brightness и contrast</h1>
        <p>
            CSS-фильтры позволяют применить визуальные эффекты к элементам страницы. Фильтры обычно применяют к
            изображениям, фонам или рамкам, а иногда и к другим элементам.
            <br><br>
            Фильтры применяются к элементу до того, как он будет отображён, поэтому количество фильтров влияет на
            скорость загрузки страницы.
            <br><br>
            Фильтры задаются с помощью свойства filter.
            <br><br>
            Яркость — brightness. Допустимы числовые значения от 0 и выше или проценты. Со значением фильтра 1 или 100%
            элемент отображается без изменений.
        </p>
        <pre>
            <code class="css">
                .effect {
                    filter: brightness(2); /* увеличивает яркость вдвое */
                    filter: brightness(10%); /* снижает яркость до 10% */
                    filter: brightness(150%); /* увеличивает яркость на 50% */
                }
            </code>
        </pre>
        <p>
            Контрастность — contrast. Как и у фильтра яркости в качестве значения можно использовать числа или проценты.
        </p>
        <pre>
            <code class="css">
                .effect {
                    filter: contrast(0.5); /* снижает контрастность наполовину */
                    filter: contrast(50%); /* тоже снижает контрастность до 50% */
                }
            </code>
        </pre>
        <p>Для корректной работы фильтров в Chrome и Safari необходимо указывать префикс-webkit-.</p>



        <h1>Бесцветность и сепия, grayscale и sepia</h1>
        <p>
            Следующие два фильтра исторически относятся к фотографии: изначально фотографии были чёрно-белые или
            коричневатого оттенка краски сепии.
            <br><br>
            С помощью фильтров бесцветности и сепии фотографиям можно придать эффект «старины».
            <br><br>
            Бесцветность — grayscale. Допустимы числовые значения от 0 до 1 и процентные значения от 0% до 100%. При
            значениях 0 или 0% элемент отображается без изменений.
        </p>
        <pre>
            <code class="css">
                .effect {
                    filter: grayscale(1); /* полное обесцвечивание */
                    filter: grayscale(50%); /* обесцвечивание наполовину */
                }
            </code>
        </pre>
        <p>Сепия — sepia. Допустимые значения такие же, как у grayscale.</p>
        <pre>
            <code class="css">
                .effect {
                    filter: sepia(1); /* полный эффект сепии */
                    filter: sepia(25%); /* эффект сепии применяется на 25% */
                }
            </code>
        </pre>



        <h1>Инверсия и насыщенность, invert и saturate</h1>
        <p>
            Ещё два фильтра для цветовых эффектов — инверсия цвета и цветовая насыщенность. Как понятно из названия,
            при инверсии цвета меняются на противоположные, и мы получаем «негатив» картинки, а цветовая насыщенность
            делает краски ярче и противоположна по смыслу фильтру обесцвечивания.
            <br><br>
            Инверсия цвета — invert. Допустимые простые числовые значения от 0 до 1 и процентные значения от 0% до 100%.
        </p>
        <pre>
            <code class="css">
                .effect {
                    filter: invert(1); /* полная инверсия цвета */
                    filter: invert(50%); /* инверсия цвета наполовину, все цвета серые */
                }
            </code>
        </pre>
        <p>
            Цветовая насыщенность — saturate. Допустимые простые числовые значения от 0 и выше и процентные значения от
            0% и выше. При значении фильтра 1 или 100% элемент отображается без изменений. Если установить нулевое
            значение, то картинка обесцветится, как при использовании фильтра grayscale.
        </p>
        <pre>
            <code class="css">
                .effect {
                    filter: saturate(2); /* цвета ярче вдвое */
                    filter: saturate(50%); /* цвета вдвое бледнее */
                    filter: saturate(0); /* обесцвеченная картинка */
                }
            </code>
        </pre>



        <h1>Поворот цвета, hue-rotate</h1>
        <img src="image/filter-hue-saturation.jpg" alt="">
        <p>
            Ещё один интересный цветовой фильтр — поворот цветаhue-rotate. Если представить все цвета в виде круга, то
            этим фильтром можно повернуть цвет картинки вдоль круга на определённый угол.
            <br><br>
            Итак, поворот цвета — hue-rotate. Значение задаётся в градусах от 0deg до 360deg. Допускается также
            использование отрицательного угла. Положительное значение будет вращать цвет по часовой стрелке, а
            отрицательное — против. При значении фильтра 0degэлемент отображается без изменений.
        </p>
        <pre>
            <code class="css">
                .effect {
                    filter: hue-rotate(90deg); /* поворот на 90 градусов по часовой */
                    filter: hue-rotate(-90deg); /* поворот на 90 градусов обратно */
                }
            </code>
        </pre>



        <h1>Размытость и непрозрачность, blur и opacity</h1>
        <p>
            Не все фильтры работают с цветом. Например, фильтр размытости создаёт у фотографии эффект расфокусировки, а
            фильтр непрозрачности может сделать объект частично прозрачным.
            <br><br>
            Фильтр blur задаёт размытость объекта. Его значение задаётся в пикселях от 0px и выше.
        </p>
        <pre>
            <code class="css">
                .effect {
                    filter: blur(5px); /* размытость в 5px */
                }
            </code>
        </pre>
        <p>
            Фильтр opacity задаёт уровень непрозрачности объекта. Работает точно так же, как свойствоopacity.
            Допустимые значения от 0 до 1 или от 0% до 100%.
        </p>
        <pre>
            <code class="css">
                .effect {
                    filter: opacity(0.5); /* объект наполовину непрозрачный */
                    filter: opacity(0%); /* полностью прозрачный объект */
                }
            </code>
        </pre>
        <p>
            Между фильтром и свойством opacity всё же есть «невидимое» отличие. Некоторые браузеры используют аппаратное
            ускорение для отрисовки фильтров, а для свойства opacity ускорение не используется. Поэтому применение
            фильтра opacity может существенно улучшить производительность по сравнению с аналогичным свойством.
        </p>



        <h1>Тень, drop-shadow</h1>
        <p>С помощью фильтра drop-shadow можно добавить тень к объекту. Синтаксис фильтра такой же, как и у свойства box-shadow.</p>
        <pre>
            <code class="css">
                .effect {
                    /*
                    чёрная тень, смещённая на 10px по горизонтали и
                    на 5px по вертикали, с радиусом размытия 3px
                    */
                    filter: drop-shadow(10px 5px 3px #000000);

                    /* несмещённая зелёная тень с радиусом размытия 5px */
                    filter: drop-shadow(0px 0px 5px green);
                }
            </code>
        </pre>
        <p>
            В отличие от box-shadow фильтр тени не поддерживает параметр inset для внутренней тени.
            <br><br>
            Кроме того, на момент написания курса в фильтре тени не поддерживается растяжение
        </p>
        <p>
            Фильтр тени имеет преимущества перед свойством box-shadow.
            <br><br>
            Во-первых, при отрисовке в браузере фильтра drop-shadow используется аппаратное ускорение, что улучшает
            производительность. А дополнительного ускорения при использовании свойства box-shadow в браузере нет.
            <br><br>
            Во-вторых, фильтр drop-shadow применяется к непрозрачному контуру картинок, а прозрачные области
            игнорируются, в то время как box-shadow задает прямоугольную тень по границе всего изображения.
            <br><br>
            На примере полупрозрачной PNG-картинки можно оценить, как работают эти два свойства. Но стоит задать такой
            картинке непрозрачный фон, как поведение фильтра изменится.
            <br><br>
            Нужно заметить, что фильтры пришли в CSS из SVG, поэтому drop-shadow и box-shadow различаются в реализации.
            То есть с одними и теми же параметрами тени будут выглядеть по-разному.
        </p>
        <p>Фильтры можно применять без ограничений не только к картинкам, но и к другим HTML-элементам.</p>



        <h1>Комбинация фильтров</h1>
        <p>
            К одному и тому же блоку можно применить несколько фильтров одновременно. Для этого все фильтры просто
            перечисляются через пробел после слова filter:

        </p>
        <pre>
            <code class="css">
                .effect {
                    filter: sepia(50%);
                    filter: sepia(50%) blur(5px);
                    filter: sepia(50%) blur(5px) opacity(50%);
                }
            </code>
        </pre>
        <p>
            Стоит помнить, что перечисление фильтров в разном порядке даёт разный результат. Это так, потому что каждый
            следующий фильтр применяется уже к изображению с эффектом.
        </p>



        <h1>Комбинация фильтров drop-shadow</h1>
        <p>
            Если применить несколько фильтров drop-shadow к одному блоку, то их комбинация даст интересный эффект.
            Так как каждый следующий фильтр в комбинации применяется к изображению с предыдущими фильтрами, то ещё одна
            тень у блока с тенью создаст двойную тень.
            <br><br>
            В этом ещё одно отличие фильтра drop-shadow от свойства box-shadow.
        </p>
        <pre>
            <code class="css">
                .effect {
                    /* обычная тень */
                    filter: drop-shadow(0px 0px 0px black);

                    /* двойная тень */
                    filter: drop-shadow(0px 0px 0px black) drop-shadow(0px 0px 0px black);
                }
            </code>
        </pre>
        <p>
            Кстати, фильтр drop-shadow бывает полезно применять не только к изображениям, но и к обычным элементам.
            Тень будет, как и в случае с картинками, идти по непрозрачному контуру. В область тени включаются также
            псевдоэлементы блока.
        </p>



        <h1>Анимация, плавные переходы CSS-фильтров</h1>
        <p>
            К CSS-фильтрам можно применять анимации и плавные переходы.
            <br><br>
            Например, очень оригинальный эффект получится, если применить бесконечную анимацию к фильтру поворота цвета
            hue-rotate на цветной фотографии.
            <br><br>
            Vожно фильтрами сделать фотографию чёрно-белой и размытой, по наведению убрать эффект фильтра, а само визуальное изменение сделать плавным.
            Кстати, у свойства filter значение по умолчанию — none.
            <br><br>
            Это испольуется, если, например, при наведении необходимо убрать фильтр.
        </p>
    </div>
</div>




<?php include ("footer.php") ?>