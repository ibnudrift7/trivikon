<section class="top-page-default pg-about">
  <!-- <div class="container"> -->
    <div class="inners_content">
      <p>About STPCICIP</p>
      <div class="clear height-10"></div><div class="height-3"></div>
      <h3><?php echo $_GET['pagename']; ?></h3>
    </div>
  <!-- </div> -->
</section>
<?php 
$page = $_GET['page'];
?>
<section class="block-details-default details-content">
    <div class="container">
        <div class="breadcrumbs-block">
            <div class="row">
                <div class="col-md-40">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/about/index')); ?>">About STPCICP</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $_GET['pagename']; ?></li>
                      </ol>
                    </nav>
                </div>
                <div class="col-md-20">
                    <a href="<?php echo CHtml::normalizeUrl(array('/about/index')); ?>" class="text-right backs_t_page d-block">Go to previous page</a>
                </div>
            </div>
        </div>
        <div class="clear height-50"></div>
        <div class="clear height-50"></div>
        <div class="clear height-15"></div>
        <div class="inner-content d-block mx-auto content-text2 <?php if ($_GET['pagename'] == 'Our Vision and Mission'): ?>vision-mission-block<?php endif; ?>">

            <?php echo $this->setting[$page.'_hero_content']; ?>

            <?php if ($_GET['page'] == 'liturgy'): ?>
                <?php echo $this->setting['liturgy_hero_content']; ?>

                <div class="row lists-insides-pastor">
                    <?php for ($k=1; $k < 8; $k++) { ?>
                    <div class="col-md-20 col-30">
                        <?php echo $this->setting['liturgy_hero_content_middle_'.$k]; ?>    
                    </div>
                    <?php } ?>
                </div>
                <div class="clear height-20"></div>
                <?php echo $this->setting['liturgy_hero_content2']; ?>
            <?php endif ?>

            <?php /*

            <?php if ($_GET['pagename'] == 'Adult Bible Study'): ?>
            <h3>Adult Bible Studies</h3>
            <p>In the beginning was the Word, and the Word was with God, and the Word was God (John 1:1)</p>
            <p>As faithful Catholics, we have to recognize our sinful condition before we see a need for change. That change can come only and thoroughly through Christ working in us. One expression of His work in us is in the area of stewardship. As taught in the Bible, stewardship becomes a powerful tool against the dangers of materialism. Many people fail to realize that wealth and possessions are cheap, artificial seasonings that eventually lose their flavour. Unfortunately, many souls will be lost because of their failure to break free from their love of the world. The ways of the world—“the lust of the flesh, and the lust of the eyes, and the pride of life” (1 John 2:16)—can all be tempered, even avoided, through the principles of stewardship lived out in our lives.</p>
            <p>Our lives as Catholic stewards reflect God’s character to the world. There is beauty, happiness, and godliness in the lives of those who dare to make a stand for biblical principles, especially against the trend of our culture. Everyone is tempted to live godless lives; the temptations are all around us, in open and in subtle ways. As Christian stewards, we have not only been shown how to escape these temptations but promised the power to do so.</p>
            <p>For us Catholics, the Bible, along with God's Holy Spirit, is to be our guide for life. Daily we need to search God's truth for how to live, as well as how to become more and more like Christ. God's Word is "living and active." Hebrews 4:12 declares - "For the word of God is living and active and sharper than any two-edged sword, and piercing as far as the division of soul and spirit, of both joints and marrow, and able to judge the thoughts and intentions of the heart."  2 Timothy 3:16-17 goes on to say - "All Scripture is inspired by God and profitable for teaching, for reproof, for correction, for training in righteousness; so that the man of God may be adequate, equipped for every good work." </p>
            <p>More than 5 years ago, every month, St. Peter Canisius International Catholic Parish is organizing a 2-hr Bible Study class, designed to help us see God and know Him through connecting His Word with our everyday surroundings! God has placed His identifying marks all over our world and lives to point us to Him.  Seeking to understand the Bible is seeking to know Him. Our Bible Study class helps open our eyes to recognizing God's presence and work in our everyday surroundings.. Our Bible Study lessons are designed to be hands-on and applicable. We have started our discussion with the Old Testament, one book every month was discussed except for few lengthy ones that requires several sessions to complete. Since 2018, we have started discussing the New Testament beginning with the Gospel of St. Mark which coincides with the current liturgical calendar that is based on this Gospel.</p>
            <?php elseif ($_GET['pagename'] == 'Fellowships'): ?>
            <h3>Fellowships</h3>
            <p>“For where two or three are gathered in my name, there am I among them.” (Matthew 18:20)</p>
            <p>As our culture has become more devoid of faith, opportunities for fellowships are scarcer. In days gone by, religion was the backbone of society and family life. Now, bringing up the topic of faith in public is like wading into hostile territory. So many claim that the Church is ignorant, outdated and chauvinistic. Or, sadly, that it’s full of paedophiles. So many objections exist — some, unfortunately, understandable — and we’ve all heard them. Committed Catholics, especially those in ministerial or leadership positions, need the gift of time together to be reminded that they are not alone in living out the mission of Christ on earth.</p>
            <p>Fellowship, by definition, is merely a friendly association and the gathering of like-minded people. Yet the very concept brings disdain from some Catholics. We have Jesus in the Eucharist however, it is wrong to espouse a spirituality without community. We are the Church, and that essentially means we are a people. The concept of fellowship is essential to our journey as Catholics; Jesus Christ himself taught us this. In establishing the Church, Jesus made clear that we are not meant to navigate our life’s journey alone. We need the love and support of like-minded people to help us to stay the course — in the good times and when the waters get rough. Despite the fact that we attend Masses to receive Christ in the Eucharist, but it does not mean the experience of Church should be limited to the moment of Communion.</p>
            <p>In this regard, Christ’s faithful, whether clerics or laity, or clerics and laity together as a community will strive with a common effort to foster a more perfect life, and to promote public worship or Christian teaching. The Catholic Fellowship will offer support to the Church in its ministry with and to young people. We are always open to those who would like to serve or would love to join us in body and spirit to witness this next step in our journey of faith. In any event please hold us in your prayer. If you want to know more about becoming a Friend or Associate of the Community please contact us. St. Peter Canisius International Catholic Parish of the Archdiocese of Jakarta organizes talk sessions on occasional basis which can help the parishioners to deepen their understanding on certain liturgical topics such as the meaning of the sacrament of reconciliation or sacrament of the Holy Eucharist. Often these talk sessions were conducted by people from overseas such as Sister Briege McKenna or Sister Emmanuel.</p>
            <p>Fellowship is not just something that we try to fit into our Christian life after we get everything else together but it is in fact very important. It will challenge us, encourage us, help us stay accountable, and fellowship is showing obedience to God and his word.  Do not neglect this part of our Catholic life.</p>
            <?php elseif ($_GET['pagename'] == 'History of STPCICP'): ?>
            <h3>About Us</h3>
            <p>The St. Peter Canisius International Catholic Parish (STPCICP) or originally known as the Expatriate Parish of Jakarta, has been in existence for over 50 years. As a categorical parish that provides pastoral care to the international catholic community residing in the Greater Jakarta area, STPCICP does not have a physical and territorial church base, and over the years has alternately attached itself to a number of territorial parishes.</p>
            <p>For the past 14 years since 2003, STPCICP has been conducting its English liturgy services at the Church of St. Theresia, Menteng and at Canisius College Chapel under a Memorandum of Understanding (MOU) agreement with respective organizations.  The Archdiocese of Jakarta has also always been a party to these MOUs and their subsequent renewals, as represented and signed by Vicar General Soebagyo. </p>
            <p>The prevailing MOU agreement with the St. Theresia Parish (STTP), and acknowledged by the Archdiocese, has expired as of 31 May 2016.  However, the various attempts made since last year to extend the agreement have been challenging; hence, currently only pending partial consensus has been achieved between STPCICP & STTP. This matter was subsequently brought up to the attention of the Vicar General of the Archdiocese of Jakarta who requested various data be compiled, thus this report is assembled.</p>
            <p>The STPCICP Council members profoundly and sincerely hope that the following report would enable the Archdiocese of Jakarta to be able to provide guidance and support in coming up with the best solution.  STPCICP only wishes to be able to continue providing the best place and services, for its congregation to worship God and to celebrate sacraments with peace and profundity.  Regardless of gender, race, motive for service attendance, STPCICP congregation of a typical weekend averages to 2,500 plus, with feast days exceeding 3,500 churchgoers. In 2016 YTD, STPCICP has recorded and registered 1,385 Sacraments of Baptism; 2,263 Sacraments of First Holy Communion; 1,321 Sacraments of Confirmation, and 329 Sacraments of Matrimony.</p>
            <div class="clear height-25"></div>
            <h3>History of STPCICP</h3>
            <p>The most important objective in redefining or affirming a shared vision is the process of developing a “sense of destiny” together which all parties can recognize as its own. One of the most effective ways would be to go back to its “sense of purpose” or the reason to exist, when STPCICP was first established.  </p>
            <p><strong>Early 1960s </strong></p>
            <p>The ministry for expatriates in Jakarta began in 1963 – 1964 when Fr. Joannes Burgers, SJ worked as a teacher in Canisius College in Menteng, Jakarta. He conducted liturgical services in English, and when Pope Paul VI promulgated the Document Sacrosanctum Concilium in 4 December 1963, Fr. Burgers had already put together an English Mass booklet for the expatriate community. Socrosanctum Concilium, which places the importance of greater participation of laity in liturgy, allowed and encouraged greater use of the vernacular (native language) in addition to Latin, particularly for the biblical readings and other prayers. As bishops determined, local or national customs could be cautiously incorporated into the liturgy. Thus, an expatriate community of Catholics began to form in Jakarta.</p>
            <p>In 1966, Fr. Burgers moved to St. John the Evangelist Parish on Jl. Melawai in Blok B, Kebayoran, where he was assigned as a parish priest from 1966 – 1968 before returning to Netherlands in 1969. He continued to conduct English-speaking Masses as well as ministering to the expatriate community.</p>
            <p><strong>1970s – 1990s</strong></p>
            <p>After Fr. Burgers left, Fr. Laurentius van der Werf continued the expat ministry as a parish priest in Blok B in 1972 – 1997. Meanwhile, Fr. Mark Fortner, S.C.J.  also ministered the English liturgy for the expatriate community in St. Stefanus Church, Cilandak.</p>
            <p>In 1980, Fr. Robert R. Lefebvre, MM. consolidated the ministry to the expats in St. Peter Canisius Chapel, Menteng.  Fr. Lefebvre registered the first baptism in the book on 15 June 1981. </p>
            <p>Fr. Bob Baines, MM. subsequently replaced Fr. Lefebvre in 1983. </p>
            <p>In 1990, the Archdiocese of Jakarta officially assigned the ministry to the expats to the Society of Jesus with a Memorandum of Understanding under Fr. F d.v.d. Schueren, SJ as the parish priest. Since faith is very personal, the Archdiocese considered it as important to provide the means of expressing faith in a language with which we are familiar. Thus, the formation of an official categorical parish became an expression of hospitality to the expatriate Catholics who not only resided in Jakarta but also to those merely visiting. </p>
            <p>When Canisius College underwent a massive renovation, the English liturgy was moved to the chapel on the 13th Floor of the <strong>Atma Jaya University on Jl. Jendral Sudirman</strong>. Fr. F. d.v.d. Schueren then stayed in the Jesuit community in the minor seminary of Wacana Bhakti, Pejaten, South Jakarta. </p>
            <p>The expatriate community, under the name of the Archdiocese of Jakarta, then bought a house at <strong>Jl. Haji Ayub No 38, Pejaten Barat</strong>, as place of residence and office of the expatriate parish priest. </p>
            <p><strong>2000s – Present </strong></p>
            <p>In 2000, Fr. Siegfried Binzler SJ replaced Fr. Schueren as the expatriate parish priest. Fr. Binzler subsequently established a Parish Council to help him in managing the ministry. </p>
            <p>In 2003, the liturgy service was moved from Atma Jaya to the Church of St. Theresia, Menteng for Saturday evening and Sunday morning Mass; and in Canisius College chapel for the Sunday evening Mass.  </p>
            <p>In 2004, Fr. Nico Dumais SJ replaced Fr. Binzler, while Fr. Ignatius Madya Utama SJ was appointed as assistant priest. </p>
            <p>In 2013 Fr. Benedictus Bambang Triatmoko SJ was appointed as parish priest while Fr. Dumais became assistant priest, who was subsequently replaced by Fr. Thomas Hidya Tjaya SJ as assistant priest in in 2014 until present.</p>
            <p>Over the course of STPCICP’s presence in St. Theresia Church, several other priests have been engaged in assisting with the Sacrament of Reconciliation and concelebrating of Masses, notably Fr. Carolus Veeger MSC (longest serving assistant priest since 1980-2014), as well as Fr. Jose Cobb CICM, Fr. Robert Suykens CICM (already repatriated to Belgium) Fr. Sylvester Asa CICM, and currently Fr. Chito A. Padilla SDB and Fr. John Mangke MSC.</p>

            <?php elseif ($_GET['pagename'] == 'Liturgy Services'): ?>
            <h3>Lectors</h3>
            <p>Content menyusul</p>
            <div class="clear height-25"></div>
            <h3>Eucharistic Ministers </h3>
            <p>Content menyusul</p>
            <div class="clear height-25"></div>
            <h3>Choir </h3>
            <p>“He who sings prays twice.” (St. Augustine)</p>
            <p>The St. Peter Canisius International Catholic Parish has been blessed with seven (7) talented and gifted Choirs who have selflessly committed and dedicated themselves to use their God-given musical talents to sing at our weekend Masses.</p>
            <p>Many of our parishioners say that the Choir is one of the reasons why they continue to attend our weekend Masses. They love their singing and their repertoire of songs which encourages them to participate more actively during the Holy Mass.</p>
            <p>What is even more amazing is that three of these Choirs have served in our Parish Masses for 30 years starting in 1988: Eucharistic Sounds, Genesis Choir and The Choir Immortal. And that is what we call COMMITMENT and DEDICATION to serve the LORD of Service!! </p>
            <p>If you wish to join any of our Choirs, you are welcome to contact the Choir Leader or Coordinator.</p>
            <div class="row lists-insides-pastor">
                <div class="col-md-20">
                    <p><strong>1. EUCHARISTIC SOUNDS</strong></p>
                    <ol><li>Martin Brillantes<br>Coordinator<br>(0816-1903-468)</li><li>Carol Brillantes, Asst. Coordinator</li><li>Paulus, Organist</li><li>Tari</li><li>Raffy & Lyn Concepcion</li><li>Mel & Ana Regalado</li><li>Gilbert & Claire Viernes</li><li>Mike & Anna Gardon</li><li>Alex and Connie Nartates</li><li>Lito and Tenette Racho</li><li>Bari & Sharon</li><li>Cean de Vries</li><li>Stella Arungayan</li><li>Debbie Torre</li><li>Kristine Nartates</li><li>Santiago Gonzales</li><li>Cecil Regalado</li><li>Robert Souza</li><li>Francis</li><li>Ivan Wikanta</li><li>Stella</li><li>Denny</li><li>Adrian & Nana</li></ol>
                </div>
                <div class="col-md-20">
                    <p><strong>2. VOICES OF PRAISE</strong></p>
                    <p>Choir Director: Doll Carag</p>
                    <ol><li>Jing Mosquera<br>Coordinator<br>(0818-0600-7051)</li><li>Jenny Ann Anino (Soprano)</li><li>Asela Labaro (Soprano)</li><li>Shiela Mendez (Soprano)</li><li>Tes Anatalio (Alto)</li><li>Joy Apolo (Alto)</li><li>Lea Carbonell (Alto)</li><li>Patty Malazarte (Alto)</li><li>Anne Milliam (Alto)</li><li>Klara Pagaduan (Alto)</li><li>Ric Anatalio (Tenor)</li><li>Sam Barrera (Tenor)</li><li>Ferdz Cruz (Tenor)</li><li>Garry Dumlao (Tenor)</li><li>Bernard Harina (Tenor)</li><li>Patrick Carbonell (Bass)</li><li>Red Mosquera (Bass)</li><li>Eduardo Cruza (Bass)</li></ol>
                </div>
                <div class="col-md-20">
                    <p><strong>3. THE CHOIR IMMORTAL</strong></p>
                    <ol><li>Sondi<br> Coordinator<br> (0815-9609-976)</li><li>Elza Pasalbessy (Soprano/Lead&nbsp;Conductor)</li><li>Eveline Adianto (Soprano/Conductor)</li><li>Adrian Susanto (Pianist/Bass)</li><li>Shierly Hilsen (Pianist)</li><li>Astrid Susanto (Soprano/Junior Conductor)</li><li>Gregorius Gerry (Bass)</li><li>Andriyanto Tjiptowarsono (Bass)</li><li>Michael (Bass)</li><li>Hogan (Bass)</li><li>Maya Redden (Soprano)</li><li>Vera (Soprano)</li><li>Lita (Soprano)</li><li>Daisy (Soprano)</li><li>Junita Silalahi (Soprano)</li><li>Maria Kharisma (Soprano)</li><li>Lusia Permita (Soprano)</li><li>Alexandra Dea (Soprano)</li><li>Santa Lusia (Alto)</li><li>Maria Rosa (Alto)</li><li>Indah (Alto)</li><li>Yanti (Alto)</li><li>Iwan Rahardjo (Tenor)</li><li>Denny Adianto (Tenor)</li><li>Deny Unardi (Tenor)</li><li>Feri Andrianus (Tenor)</li><li>Hans Soesanto (Tenor)</li><li>Joseph (Tenor)</li></ol>
                </div>
            </div>

            <div class="clear height-20"></div>
            <div class="row lists-insides-pastor">
                <div class="col-md-20">
                    <p><strong>4. CADENZA</strong></p>
                    <ol><li>Eveline Gunawan,<br>Coordinator<br>(0818-827-315)</li><li>Denny Adianto</li><li>Lisasari Koosman</li><li>Zion Tjendana</li><li>Adrian Susanto</li><li>Astrid Susanto</li></ol>
                </div>
                <div class="col-md-20">
                    <p><strong>5. GENESIS CHOIR</strong></p>
                    <ol><li>Paula Roque <br>Choir Leader <br>(0816-832-370)</li><li>Grace Samson, Coordinator</li><li>Victor Chandra, Organist</li><li>Percy Cabauatan, Guitarist</li><li>Malen Cezar</li><li>Olive Villamayor</li><li>Rachelle Esteban</li><li>Helen Bagalanon</li><li>Shielou Malazarte</li><li>Lindie De Asis</li><li>Shiela Anonoy</li><li>Lisa Widjaja</li><li>Natalia Alamsyah</li><li>Louisa Ingrid</li><li>Jaylord Bagalanon</li><li>Armand Utan</li><li>Riff Koesoemawiria</li><li>Philipus Kilok</li></ol>
                </div>
                <div class="col-md-20">
                    <p><strong>6. PRAISE GOD CHOIR</strong></p>
                    <ol><li>Rickey Leuterio <br>Choir Leader/Coordinator <br>(0811-810-187)</li><li>Yacinta Adelina, Keyboardist/Organist</li><li>Noel Sabandal, Guitarist</li><li>Anna Mae Tuazon</li><li>Arianne Peligrino</li><li>Clarence Dela Cruz</li><li>Criselda Estillore</li><li>Derick Mallari</li><li>Desiree Foronda</li><li>Dinna Leuterio</li><li>Esper Ocasion Fernando</li><li>Gary Pigon</li><li>Geralyn Evangelista</li><li>Gieth Donald Reforma</li><li>Jerome De Gala</li><li>Jerome Fernando</li><li>John Edison Regalado</li><li>Jovita D'Souza</li><li>Kathleen Ngkaion</li><li>Kate Duy Mallari</li><li>Katrina Rivera De Gala</li><li>Maria Elizabeth Pigon</li><li>Maria Helena Wantah</li><li>Marivic Sabandal</li><li>Mia Langas</li><li>Mike Evangelista</li><li>Mila Gregorio</li><li>Nap Langas</li><li>Regina Luz Arquiza</li><li>Richard Gary Pigon</li><li>Wence Singson</li></ol>
                </div>
            </div>

            <div class="clear height-20"></div>
            <div class="row lists-insides-pastor">
                 <div class="col-md-20">
                    <p><strong>7. THE CHOIR IMMORTAL</strong></p>
                    <ol><li>Maria Sumagaudia <br>Choir Leader <br>(0812-8687-764 / 0878-7638-8834) <br>#elfacschoir</li></ol>
                 </div>
                 <div class="col-md-40"></div>
            </div>
            
            <div class="clear height-25"></div>
            <h3>Usher</h3>
            <p>Content menyusul</p>
            <div class="clear height-25"></div>
            <h3>Altar Servers</h3>
            <p>Content menyusul</p>
            <div class="clear height-25"></div>

            <?php elseif ($_GET['pagename'] == 'Our Vision and Mission'): ?>
            <h3>Vision</h3>
            <p>The most important objective in redefining or affirming a shared vision is the process of developing a “sense of destiny” together which all parties can recognize as its own. One of the most effective ways would be to go back to its “sense of purpose” or the reason to exist, when STPCICP was first established.</p>
            <div class="clear height-25"></div>
            <h3>Mission</h3>
            <p>The most important objective in redefining or affirming a shared vision is the process of developing a “sense of destiny” together which all parties can recognize as its own. One of the most effective ways would be to go back to its “sense of purpose” or the reason to exist, when STPCICP was first established.</p>
            <div class="clear height-30"></div>

            <?php elseif ($_GET['pagename'] == 'Prayer Group'): ?>
            <h3>SANTA MONICA PRAYER GROUP (SMPG)</h3>
            <p class="mb-5">INTRODUCTION: </p>
            <ul><li>SMPG was formed after a Life in the Spirit Seminar in Jakarta in 1988, with Fr. Lambert Sugiri as spiritual mentor. </li><li>Feast of St. Monica (August 27) is celebrated with Holy Mass. </li><li>We are a non-covenanted group. Meetings are informal in nature and is open to everyone. </li></ul>
            <p class="mb-5">MISSION:</p>
            <ul><li>The Lord commands us (through St. Faustina) to exercise the three degrees of mercy. “The first: the act of mercy of whatever&nbsp;kind. The second: the word of mercy- if the act of mercy cannot be carried out. The third: prayer- if we cannot show mercy by&nbsp;deeds or words, we can always do so by prayer.” In SMPG, this is lived by members.</li><li>We aim to become holier in our vocation as wives and mothers with guidance from the Parish, our priest-mentors, and through&nbsp;renewal seminars.</li></ul>
            <p class="mb-5">SERVICE:</p>
            <ul><li>10am English Masses at St. Stefanus Church (every Tuesday, monthly First Friday, Ash Wednesday).   </li><li>Wednesday prayer meetings include Praise & Worship and fellowship.</li><li>Intercessory Prayer Group.</li></ul>
            <p class="mb-5">CONTACT:</p>
            <p>Emma Kartadjoemena - 0811 921 795<br>Eunice Tirtalukita: 0811 181 577</p>
            <p>&nbsp;</p>

            <h3 class="mb-5">GENESIS CATHOLIC COMMUNITY</h3>
            <p>A Community of Disciples on Mission</p>
            <p><strong>The Beginnings</strong></p>
            
            <p>The Genesis Catholic Community evolved from a Bible Study group in <strong>August 1988</strong>. It has been a part of the St. Peter Canisius Parish as the members were expatriates working in Jakarta. Thus, the Parish Priest became its Spiritual Director from Fr. Bob Baines to Fr. Friedric de van der Schueren, Fr. Siegfried Binzler, Fr. Ignatius L. Madya Utama and at present, Fr. Benedictus B. Triatmoko, SJ.  </p>
            <p>The Group began conducting Life in the Spirit Seminars at the Canisius Chapel and more people joined them. Initially their prayer meetings were held in their homes. But soon their membership swelled and so in mid-1989 they moved the prayer meeting to Gereja Santa Maria in Blok Q, Kebayoran Baru.</p>
            <p>As the Friday Prayer Meetings, seminars and fellowships continued, the LORD blessed them and they experienced growth both in membership and in their relationship with Him. </p>
            <p><strong>Growth/Affiliations</strong></p>
            <p>After some time, the leaders felt that GOD was leading them to a higher calling - to become a covenanted community. And so in May 1994 they sought the help of <strong>Bro. Bo Sanchez of the Light of Jesus (LOJ)</strong> and the <strong>Ligaya ng Panginoon (LNP)</strong> communities from Manila.</p>
            <p>In 2004, Genesis also affiliated itself with the <strong>Sword of the Spirit (SOS)</strong>, an international Community of communities based in Ann Arbor, Michigan (USA). For several years, Genesis members received invaluable formation teachings and visitations from SOS Leaders.</p>
            <p>In 2003, when the Expatriate Parish moved location, Genesis likewise followed and moved its Friday Prayer Meetings to St. Theresia Church.</p>
            <p>The Founders and many former members of Genesis have long been gone – either moved back to the Philippines or migrated to US or Canada – but the Community lives on. Because it has always believed that it is the LORD who built Genesis and it is He who sustains it and will continue to sustain it. And we live in faith and confidence that He who is faithful will bring to completion the good works He has begun in Genesis. (Philippians 1:6)</p><p></p>
            <p><strong>New Mission/New Direction</strong></p>
            <p>In December 2013, the Community revived its relationship with <strong>LOJ Community of Bro</strong>. Bo Sanchez. And because of this, Genesis has taken another giant leap of faith – a new direction, a new mission from the LORD.  </p>
            <p>Thus, on January 23, 2015, the <strong>ENGLISH FEAST</strong> Jakarta was born. The Feast is a Catholic prayer gathering comprised of a Holy Mass, Lively Praise & Worship and the Preaching of the Word of GOD. English Feast is currently held every 2nd and 4th Saturday of the month at Rock Center, Bellagio Mall in South Jakarta.</p>
            <p>To date, we continue to believe and trust that the LORD will make the English Feast grow to fulfill its mission: <strong>To reach out to the unchurched and make them disciples and followers of Jesus</strong>.</p>
            <p><strong>Join Us and Be Blessed!</strong></p>
            <p>At the <strong>ENGLISH FEAST, the “Happiest Place on Earth”</strong> experience firsthand the joy, the love, the warmth and all the amazing things that the LORD does to His people when they gather together in His Name. You can also bring your kids to our Amazing Kids Ministry.</p>
            <p>Our other ministries include: Light Groups, Intercessory Ministry, Worship Ministry, Works of Mercy, Good News Bulletin (bi-monthly) and the Genesis Choir (6pm Canisius Mass).</p>
            <p>For more information, please contact Bro. Pete Lapid 08119950730 or Sis. Pinky Torres 0856-9700-4938.</p>
            <?php endif ?>

            */ ?>


            <div class="clear"></div>
        </div>
        <div class="clear height-50"></div>
        <div class="clear height-50"></div>
    </div>

    <div class="blocks_blue_bottom">
        <div class="container text-center">
            <a href="<?php echo CHtml::normalizeUrl(array('/about/index')); ?>">More About STPCICIP</a>
            <div class="clear"></div>
        </div>
    </div>
</section>

<section class="content-2-col blocks-home sub-content-1">
    <div class="container width_less">

        <div class="lists-blocks-next-organize mt-65">
            <div class="row">
                <?php 
                $links_arr1 = [
                            1 => ['page'=>'history', 'title'=>'History of STPCICP'],
                                 ['page'=>'visimisi', 'title'=>'Our Vision and Mission'],
                                 ['page'=>'registration']
                              ];
                ?>

                <?php for ($i=1; $i < 4; $i++) { ?>
                <div class="col-md-20">
                    <div class="items text-center">
                        <h5 class="sub-title"><?php echo $this->setting['about_content1_title_'. $i]; ?></h5>
                        <div class="pictures">
                            <?php if ($i == 3): ?>
                                <a href="<?php echo CHtml::normalizeUrl(array('/about/registration')); ?>">
                            <?php else: ?>
                            <a href="<?php echo CHtml::normalizeUrl(array('/about/detail', 'page'=>$links_arr1[$i]['page'], 'pagename'=>$links_arr1[$i]['title'] )); ?>">
                            <?php endif ?>
                            <img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(566,302, '/images/static/'. $this->setting['about_content1_image_'. $i], array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-fluid"></a>
                        </div>
                        <div class="info">
                            <p><?php echo $this->setting['about_content1_content_'. $i]; ?></p>
                            <?php if ($i == 3): ?>
                                <a class="btn btn-danger" href="<?php echo CHtml::normalizeUrl(array('/about/registration')); ?>">
                            <?php else: ?>
                            <a class="btn btn-danger" href="<?php echo CHtml::normalizeUrl(array('/about/detail', 'page'=>$links_arr1[$i]['page'], 'pagename'=>$links_arr1[$i]['title'] )); ?>">
                            <?php endif ?>READ MORE</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

        <div class="clear"></div>
    </div>
</section>

<section class="content-3-col blocks-pages sub-content-2">
    <div class="container">
        <h3 class="text-center"><?php echo $this->setting['about_content2_intro']; ?></h3>
        <div class="lists-blocks-next-about mt-65">
            <div class="row">
                <?php 
                // $list_about = [1=>'Community Life', 'Prayer Group', 'Adult Bible Study', 'Fellowships', 'Community Service', 'Liturgy Services'];

                $links_arr2 = [
                            1 => ['page'=>'comlife', 'title'=>'Community Life'],
                            ['page'=>'prayer', 'title'=>'Prayer Group'],
                            ['page'=>'biblestudy', 'title'=>'Adult Bible Study'],
                            ['page'=>'fellowships', 'title'=>'Fellowships'],
                            ['page'=>'comservice', 'title'=>'Community Service'],
                            ['page'=>'liturgy', 'title'=>'Liturgy Services'],
                            ];
                ?>
                <?php for ($i=1; $i < 7; $i++) { ?>
                <div class="col-md-20 col-sm-30">
                    <div class="items">
                        <div class="picturesn">
                                <img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(448,190, '/images/static/'. $this->setting['about_content2_image_'. $i] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-fluid">
                            <div class="info">
                                <a href="<?php echo CHtml::normalizeUrl(array('/about/detail', 'page'=> $links_arr2[$i]['page'], 'pagename'=> $links_arr2[$i]['title'])); ?>">
                                <div class="table-out">
                                    <div class="table-in">
                                    <h5><?php echo $this->setting['about_content2_title_'. $i] ?></h5>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="clear clearfix"></div>
        </div>

        <div class="clear"></div>
    </div>
</section>