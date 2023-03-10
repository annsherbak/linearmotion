<?php
/*
Template Name: article-1
*/
?>


<?php get_header() ?>

<main class="main" id="category__main">
  <div class="container">
    <div class="husk">
      <section class="article">
        <h1 class="article__title special__title">
          Линейные актуаторы - основные положения, как работает линейный актуатор
        </h1>
        <p class="article__preview">
          Эта обзорная статья дает общие представления о принципах работы линейных актуаторов и рассчитана на тех, кто только начинает работу с ними. Если Вы относитесь именно к этой категории читателей, мы надеемся, что статья даст Вам необходимую информацию и поможет в выборе подходящего актуатора для решения поставленной задачи.
        </p>
        <div class="article__item">
          <h2 class="article__subtitle">Как работает линейный актуатор</h2>
          <p class="article__text">
            Первый большой вопрос&nbsp;&mdash; каков принцип работы линейного актуатора. Многие люди (большинство людей), не&nbsp;сталкивавшихся ранее с&nbsp;необходимостью применения актуаторов, называют их&nbsp;&laquo;толкателем&raquo;, &laquo;электрическим поршнем&raquo;, &laquo;механическим цилиндром&raquo; и&nbsp;другими подобными (и&nbsp;нередко нелепыми) терминами. Тем не&nbsp;менее, все они подразумевают одно и&nbsp;то&nbsp;же устройство, независимо от&nbsp;правильности терминологии. Линейный актуатор выполняет именно такую работу, которую подразумевает его название: &laquo;Актуатор&raquo; (от&nbsp;английского &laquo;actuate&raquo;)&nbsp;&mdash; &laquo;приводить в&nbsp;движение&raquo; и&nbsp;&laquo;линейный&raquo;&nbsp;&mdash; выполняющий прямолинейное движение, движущийся по&nbsp;прямой.
          </p>
          <img class="article__pic" src="<?php bloginfo('template_url'); ?>/app/images/articles/linear-actuator-schem.gif" alt="">
          <div class="article__container">
            <div class="article__container-item article__container--big">
              <p class="article__text">
                Существует множество различных способов реализации такого движения с&nbsp;помощью двигателя. Наиболее растространенный вариант&nbsp;&mdash; с&nbsp;помощью выдвигающегося и&nbsp;втягивающегося штока (слайдера), перемещающегося по&nbsp;направляющей. Сферы использования таких линейных приводов широко варьируются, они могут использоваться практически в&nbsp;любых устройствах&nbsp;&mdash; для регулирования положения телевизора (в&nbsp;том числе, выдвигающиеся и&nbsp;убирающиеся конструкции), для подъема и&nbsp;опускания пандусов для инвалидных колясок, в&nbsp;промышленном оборудовании, в&nbsp;игрушках и&nbsp;даже в&nbsp;авиационно-космических технологиях.
              </p>
              <p class="article__text">
                В конструкции линейного актуатора для создания линейного перемещения чаще всего используется винт (или более правильное название - винтовая передача). Винт вращается по или против часовой стрелки, его вращение вызывает линейное перемещение штока, соединенного с гайкой, которая перемещается вдоль винта.
              </p>
              <p class="article__text">
                Двигатели, которые используются в линейных актуаторах, в большинстве случаев являются классическими коллекторными двигателями постоянного тока 12В или 24В. Но в ряде случаев могут использоваться другие типы электродвигателей и другой вольтаж. Чтобы изменить направление движения штока линейного актуатора необходимо изменить направление вращения его двигателя. В случае использования коллекторного двигателя постоянного тока достаточно поменять полярность питания (поменять местами два провода питания двигателя). Типичное решение - с использованием автоматического переключателя, который меняет полярность подключения питания.
              </p>
            </div>
            <div class="article__container-item article__container--small">
              <img class="article__pic--gif" src="<?php bloginfo('template_url'); ?>/app/images/articles/linear-actuator-animation.gif" alt="">
            </div>
          </div>



          <p class="article__text">
            Существующие линейные актуаторы различаются возможной длиной хода. Применительно к конструкции актуатора это означает, что актуаторы выполняются с различными длинами штока и корпуса. Помимо длины хода актуатора, важными характеристиками являются скорость и усилие на штоке. Для достижения необходимой скорости и усилия между валом электродвигателя и винтом устанавливают механический редуктор. Редуктор при неизменной мощности двигателя изменяет соотношение скорости его вращения и крутящего момента, что в итоге влияет на конечную скорость линейного перемещения и усилие на штоке актуатора - чем больше передаточное отношение редуктора, тем больше усилие и меньше скорость. Винт также является механической передачей, влияющей на соотношение скорости и усилия - чем меньше шаг винта, тем больше усилие и меньше скорость перемещения штока. В любом случае без использования специальных устройств регулирования скорости двигателя всегда соблюдается взаимосвязь между усилием и скоростью перемещения: чем выше скорость перемещения штока, тем меньше усилие (и наоборот).
          </p>
          <img class="article__pic" src="<?php bloginfo('template_url'); ?>/app/images/articles/gears.jpg" alt="">
          <p class="article__text">
            Для реализации остановки штока в конечных положениях, актуатор оснащается встроенными концевиками (концевыми выключателями или микровыключателями). Концевые выключатели устанавливаются внутри на шток актуатора. Срабатывание концевых выключателей происходит при достижении гайкой крайних положений внутри корпуса актуатора - один датчик устанавливается на крайнее выдвинуте положение, второй - на крайнее втянутое положение. При достижении крайнего положения датчик срабатывает, питание двигателя выключается. Дальнейшее движение возможно только в противоположном направлении - при смене полярности питания и реверсе двигателя.
          </p>

        </div>
        <div class=" article__item">
          <h2 class="article__subtitle">Как подобрать линейный актуатр</h2>
          <p class="article__text">
            Чтобы выбрать подходящий линейный актуатор, необходимо определиться с основными требованиями системы:
          </p>
          <ul class="article__list">
            <li>скорость перемещения (м/с, мм/мин, см/мин, мм/с и т.п.;</li>
            <li>усилие перемещения (толкания/втягивания) (Н, кгс);</li>
            <li>длина хода (мм, см, м);</li>
            <li>предпочитаемое напряжение питания (12В, 24В, 220В);</li>
            <li>продольное или поперечное расположение двигателя.</li>
          </ul>
        </div>
      </section>
      <?php echo do_shortcode('[contact-form-7 id="42" title="Форма обратной связи" html_id="feedback-form"]'); ?>
    </div>

  </div>

</main>
<?php get_footer() ?>
</div>