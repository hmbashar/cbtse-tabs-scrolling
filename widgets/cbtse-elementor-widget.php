<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class CB_Tabs_Scrolling_Effect_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'cbtse_tabs_scrolling_effect';
    }

    public function get_title()
    {
        return __('CB Tabs with Scrolling Effect', 'cbtse');
    }
    public function get_script_depends()
    {
        return ['gsap', 'cbtse-gsap-latest', 'cbtse-scroll-smoother', 'cbtse-scroll-to-plugin', 'cbtse-scroll-trigger', 'cbtse-script'];
    }
    public function get_icon()
    {
        return 'eicon-tabs';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'cbtse'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'tabs',
            [
                'label' => __('Tabs', 'cbtse'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Menu One,Menu Two,Menu Three,Menu Four', 'cbtse'),
                'placeholder' => __('Enter tabs separated by commas', 'cbtse'),
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
<h1>this is heading</h1>
<h2>this is heading two</h2>
        <div id="smooth-wrapper">
            <div id="smooth-content">
                <section id="cbtse-slideup-content-wrapper">
                    <div class="container">
                        <div class="content-wrapper">
                            <div class="tab-buttons">
                                <button class="tab-button cbtse-tab-button1">Menu One</button>
                                <button class="tab-button cbtse-tab-button2">Menu Two</button>
                                <button class="tab-button cbtse-tab-button3">Menu Three</button>
                                <button class="tab-button cbtse-tab-button4">Menu Four</button>
                            </div>
                            <div class="cbtse-slideup-contents">
                                <div class="cbtse-slideup-content">
                                    <h2>tab content 1 </h2>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore, fuga illum. Illo
                                        neque expedita ad commodi assumenda reprehenderit voluptate harum voluptatum id. Fugiat,
                                        iusto corrupti molestias, dolore voluptates odit temporibus harum rerum voluptatibus
                                        repellat distinctio. Reiciendis quo quis possimus voluptate ab deleniti provident saepe,
                                        enim deserunt eum unde repudiandae sapiente, quae aliquid error iure sequi in odit,
                                        beatae exercitationem minima facilis? Similique autem, quaerat vitae fuga minus, magni
                                        quisquam debitis repellat id, tenetur beatae quod recusandae delectus dignissimos atque
                                        quo est cum necessitatibus molestiae enim adipisci consequuntur? Illum adipisci
                                        molestias iure, vitae deserunt laborum quia nostrum. Aut, ea, nostrum quo tenetur sed
                                        ipsam placeat tempora, quis deleniti alias expedita ab enim iste voluptate voluptatem.
                                        Temporibus incidunt vitae sint porro, totam sunt! Laborum sapiente porro accusantium
                                        doloribus molestias rerum voluptatibus soluta quisquam animi aliquam! Corrupti ab amet
                                        ad? Dolor possimus quaerat doloribus provident voluptate delectus autem numquam qui quo
                                        odit! Qui assumenda earum doloremque voluptatum reiciendis, cum facilis veniam optio
                                        recusandae sint dignissimos in, aut impedit sequi cumque odio ipsum fuga animi atque id
                                        eveniet beatae unde. Esse harum, est ducimus magni, quidem cupiditate nobis, similique
                                        odit necessitatibus architecto voluptatibus aperiam perferendis qui possimus alias
                                        sapiente atque id saepe magnam vitae soluta? Debitis animi, nam expedita consequuntur
                                        quam iste accusamus neque nulla aspernatur, ullam eligendi tempore saepe magni itaque
                                        nemo ex ducimus aliquam corporis autem pariatur. Reprehenderit, ducimus? Aliquam iusto
                                        excepturi tempora aspernatur expedita asperiores inventore soluta minus voluptate
                                        quaerat. Vitae, ea. Cupiditate laborum natus soluta expedita quibusdam commodi molestias
                                        repudiandae dolore vero officiis quidem eveniet facere voluptatibus delectus cumque,
                                        neque tenetur dolorem reprehenderit tempore repellat eaque labore dolores accusamus
                                        unde. Commodi odio pariatur maiores. Minima aspernatur officiis ipsum deleniti ducimus
                                        quos maiores, consequatur voluptate delectus nostrum non aperiam sunt sit at! Voluptas
                                        veniam inventore ipsam officia deserunt totam rerum cumque aspernatur! In placeat eius
                                        optio. Aliquid eveniet, maxime eaque temporibus qui ex at consequatur molestiae nesciunt
                                        alias reiciendis tempora! Repudiandae sequi asperiores reiciendis hic maxime sint minus
                                        labore eveniet numquam vitae nesciunt ex, similique incidunt officiis rem quisquam
                                        pariatur in debitis neque quas. Illum sed eveniet dolorem nobis! Asperiores debitis quo
                                        voluptatibus eum explicabo voluptate, a corporis libero mollitia, culpa labore ipsa
                                        ratione molestiae quos reiciendis, sed recusandae quia dignissimos aspernatur nam
                                        accusamus itaque. Nemo dolorum, saepe error esse maxime ut sunt rem deserunt, libero
                                        eius quod eos necessitatibus praesentium sit fuga consequatur dolor dolore, obcaecati
                                        illum mollitia aliquid provident fugiat cum veritatis. Odit sit amet autem pariatur.
                                        Repellat autem magnam quasi a numquam magni molestiae ea, beatae rerum sit esse. Qui ut
                                        beatae, veniam est magni voluptate nulla animi veritatis fugiat facilis vitae adipisci
                                        inventore consectetur laborum voluptas provident ullam. Aspernatur omnis perspiciatis
                                        iusto facere, ullam quis quidem sit voluptatibus animi quasi, autem nesciunt quibusdam
                                        hic sapiente doloribus laudantium officiis veritatis est delectus! Reiciendis architecto
                                        facilis, consectetur iure temporibus tenetur autem reprehenderit unde. Deleniti, omnis
                                        necessitatibus perferendis, quos dolore veritatis sequi, cupiditate fugit vero ab enim
                                        architecto voluptatem hic pariatur vel illo illum nihil ullam incidunt aut commodi est.
                                    </p>
                                </div>
                                <div class="cbtse-slideup-content">
                                    <h2>Tab content 2</h2>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores impedit sit, dicta
                                        recusandae voluptatibus ullam quia odit at vero quasi eos nisi minima officiis! Nostrum,
                                        facere blanditiis nobis enim nemo impedit modi, temporibus magnam culpa nulla nam illum
                                        corrupti numquam odio est laboriosam, recusandae adipisci alias itaque quia quisquam at
                                        fugiat sint. Officiis, soluta aliquam repudiandae dolorum ullam laboriosam expedita ex
                                        cum perferendis esse temporibus eligendi commodi ratione minus et nulla nesciunt
                                        consequuntur voluptatibus quia distinctio sed recusandae. Ducimus accusantium minima
                                        sint, eum numquam unde voluptates. Aperiam eveniet praesentium laborum! Nulla
                                        repudiandae rerum obcaecati fuga, ducimus enim vitae quasi asperiores, aperiam dolor
                                        laboriosam unde eveniet accusantium pariatur, eligendi ipsa cupiditate! Quam voluptatem
                                        autem harum tempora est ducimus, ratione dolor nostrum similique omnis quaerat fugit
                                        ipsam molestias consectetur, earum quasi sapiente maiores iure dolorem eveniet nobis.
                                        Provident ut vel, aperiam repudiandae rem nihil sapiente tenetur qui assumenda
                                        reprehenderit neque? Repudiandae dicta soluta illum nesciunt deserunt, laboriosam
                                        tempore, esse at consequuntur modi provident porro veniam temporibus sapiente ex debitis
                                        aspernatur beatae quod. Tenetur voluptatibus, excepturi nisi eaque exercitationem
                                        consequatur ab? Expedita, veniam, voluptatibus odit non animi quasi laborum doloremque
                                        sit, quis placeat rem velit nihil explicabo enim nisi. At minima cumque impedit libero
                                        commodi laborum ab, odit officiis necessitatibus maxime ea, veritatis a voluptatibus hic
                                        explicabo laudantium cupiditate accusamus asperiores, non quo incidunt! Illum harum,
                                        unde tempore temporibus nisi aspernatur, in consequuntur libero architecto vitae
                                        excepturi aut atque dolorum eius cupiditate inventore tempora veniam modi eos officiis
                                        fuga quasi! Atque ullam vero totam possimus impedit sequi quidem minima quo expedita
                                        alias fuga reprehenderit minus neque, dolor, quos vitae, veniam excepturi consequatur
                                        porro consequuntur soluta facilis ea provident? Temporibus, officia corporis explicabo
                                        fuga labore porro alias, autem sed quibusdam nostrum esse odit. Fugiat fuga eos labore,
                                        optio eum impedit facere porro eveniet consectetur possimus velit tempora accusantium,
                                        odit repellat, perspiciatis beatae. Nesciunt quos magni exercitationem animi. Minima a
                                        fugit porro maxime, officiis nam iusto provident enim voluptatem. Quod, itaque. Quaerat,
                                        debitis magnam maiores consequuntur, rem doloribus ratione voluptates aperiam,
                                        recusandae quas repudiandae necessitatibus quam ab eaque tenetur nemo nobis voluptate.
                                        At saepe eligendi quisquam quod asperiores, aut magnam neque ullam! Optio voluptas saepe
                                        porro reprehenderit sunt perspiciatis illum! Iure doloribus soluta neque qui debitis
                                        recusandae perspiciatis cupiditate ad, nemo magnam dolorem vero totam velit, distinctio
                                        minus necessitatibus sunt doloremque voluptate. Neque odit molestiae blanditiis odio,
                                        amet tempora deleniti, dolorum, cum eos id adipisci doloribus quod? Dignissimos
                                        doloribus iste ab quidem beatae tempore omnis voluptates enim dolore, accusantium harum
                                        illo voluptatem architecto quae, quos explicabo? Est mollitia suscipit tenetur quod sed
                                        maiores incidunt quasi ad dolores magnam! Vitae hic ipsam explicabo ratione ab atque
                                        dolore optio sed consequatur. Nihil consequuntur odit officiis tenetur quasi hic,
                                        dolores cumque laborum perferendis, dolorum eos. Enim velit eligendi, ab at sunt
                                        debitis? Corporis laborum repudiandae iste deserunt fuga nihil sapiente, aspernatur
                                        fugit beatae necessitatibus error neque molestias magni accusamus nostrum impedit
                                        suscipit amet repellat eveniet tenetur quo cum sunt consectetur. Vitae tenetur mollitia
                                        minus velit nisi, sit sunt.</p>
                                </div>
                                <div class="cbtse-slideup-content">
                                    <h2>Tab content 3</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam iste sed id dolore
                                        repudiandae? Illo hic eius nihil molestias officia magni distinctio praesentium tempore,
                                        magnam, illum molestiae accusantium laboriosam adipisci placeat a dolore. Sapiente amet
                                        asperiores officia illum ullam architecto similique placeat, minima tempore expedita
                                        reprehenderit neque tenetur nam provident ea iure accusamus cum voluptates perspiciatis
                                        numquam? Optio culpa maxime temporibus debitis, id velit repellat eos labore, soluta ex
                                        cumque ipsam quibusdam quasi. Laboriosam consectetur ex quod facilis voluptatum
                                        cupiditate totam doloremque, minus perferendis, et, illum laborum a optio quaerat
                                        veritatis iste animi sequi nam perspiciatis delectus doloribus ea magnam voluptate!
                                        Ratione exercitationem accusamus quae numquam nesciunt? Laboriosam pariatur, deleniti
                                        quam culpa praesentium cupiditate impedit itaque amet ab iure aliquam dignissimos quod
                                        incidunt architecto molestias voluptatem. Recusandae, est eum! Recusandae molestiae
                                        culpa, ab sint ipsum dolorem sapiente maxime perspiciatis nulla! Dolores fuga nesciunt
                                        laboriosam sunt eaque. Aliquid recusandae natus tenetur optio quos ullam atque eaque,
                                        possimus reprehenderit officia enim vitae nostrum fuga expedita ipsa saepe, explicabo
                                        sapiente. Impedit quisquam doloremque quis reiciendis corporis, tempore soluta
                                        perferendis eius est beatae modi labore! Facere eveniet dolorem, quis quibusdam quasi
                                        veritatis animi consectetur doloribus. Delectus facere molestias sapiente exercitationem
                                        nostrum necessitatibus nulla commodi dolores perferendis corporis minima temporibus, quo
                                        consequuntur provident, unde natus voluptatibus iure rerum? Nam molestias nulla sapiente
                                        commodi, consequatur magnam dolorum possimus temporibus, impedit vero dolores delectus
                                        est explicabo, quisquam natus optio exercitationem esse veritatis hic! Eum cupiditate,
                                        quisquam molestias voluptate culpa rem? Nam eveniet nesciunt aliquam facere! Quaerat
                                        odit, sunt dolorum iusto ea, nemo ut vitae amet nisi illum, consequuntur nesciunt
                                        impedit dignissimos suscipit modi. Rerum doloribus delectus natus quas nihil, quasi rem
                                        tenetur totam laudantium voluptatem dolores numquam voluptates eaque dolor officia
                                        itaque, odit debitis cum nisi laborum. Repellendus cum nobis culpa in soluta sed facilis
                                        adipisci optio aliquid. Dolores, veritatis hic, vero doloremque numquam minima tempora
                                        libero iusto debitis molestiae molestias doloribus similique voluptate perferendis
                                        perspiciatis sint quis ea saepe. Fuga vel quam facilis architecto nam eos libero quae
                                        totam sequi cupiditate similique consequuntur temporibus eum ab aut tempora animi
                                        nostrum, expedita corrupti? Incidunt, vero quas quo doloremque odio provident facere
                                        sint quam placeat dolorum molestias, maxime dolore. Eligendi cupiditate similique quis
                                        perspiciatis maiores alias sapiente in facere quaerat voluptates! Ut quod quae, deleniti
                                        possimus provident nemo, odit architecto esse, deserunt quo harum aperiam corporis vero
                                        fugit non a officia nam? Est quisquam rem unde quae ipsa beatae iste! Placeat illum qui
                                        voluptate voluptatem. Qui dolor voluptas nisi, nesciunt nostrum et quas perferendis
                                        repellendus quos natus? Harum illum ad sit ipsum quae officia? Culpa, aliquid
                                        praesentium? Repellendus laboriosam non praesentium fugit dolorum mollitia, nam quisquam
                                        ducimus neque dolorem odio repellat incidunt eligendi debitis illo earum est quos
                                        aspernatur ut labore aliquid numquam dignissimos perspiciatis? Magni saepe fugit dolorem
                                        ea. Aspernatur in sequi reprehenderit deleniti obcaecati laboriosam inventore dolore
                                        delectus temporibus officiis dicta ipsam, perferendis incidunt neque necessitatibus
                                        culpa nobis, quos magnam perspiciatis ullam facere recusandae maxime. Fuga beatae quae
                                        eaque. Nihil voluptates ipsam reiciendis fugiat similique recusandae?</p>
                                </div>
                                <div class="cbtse-slideup-content">
                                    <h2>Tab Content 4</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam ratione velit laborum
                                        dolorem quae pariatur id aspernatur. Temporibus nulla eaque, ratione id officiis odit
                                        nostrum, doloremque laudantium tempora enim distinctio aliquid non illum, quod
                                        voluptatibus! Distinctio beatae, nesciunt illo voluptatem nemo unde earum voluptatibus
                                        alias velit magnam! Cumque deserunt nostrum nisi harum. Ab vel eos eius odio inventore
                                        accusantium maiores nam, commodi tenetur facere quod adipisci earum distinctio id
                                        consequuntur quis veniam? Mollitia illum fugiat ratione dolorum saepe! Aliquam nobis,
                                        minus ex illo et ducimus vel repudiandae voluptates iusto aliquid corrupti sequi
                                        inventore rerum sunt dolor perspiciatis! Amet illo rem atque in autem exercitationem
                                        perferendis, officia id aspernatur! Rerum itaque adipisci earum amet, in eos quae
                                        suscipit perferendis odit? Praesentium voluptatum adipisci hic tempora at dolor fuga?
                                        Non ratione maiores exercitationem dolorem temporibus inventore eaque alias debitis
                                        minima? Voluptatibus doloremque commodi, ut, id laboriosam, voluptates adipisci mollitia
                                        est a dolorum vero cupiditate sed? Et minima facere beatae illo eaque ipsum laudantium
                                        doloremque, perspiciatis eum incidunt quod est molestias non delectus quis reprehenderit
                                        quasi quos eveniet? Officia, tempore debitis? Provident optio facere molestiae et ea qui
                                        ad, nulla ducimus autem debitis! Omnis illum voluptates voluptas nemo ad, veritatis
                                        inventore, quam ratione architecto tempore obcaecati quis minima quas voluptatum facere
                                        et necessitatibus, nihil temporibus provident esse dolorem libero ipsum sed eligendi?
                                        Magni blanditiis cumque minus adipisci sequi nam ex incidunt dolor quaerat voluptates
                                        corporis eos commodi aperiam a quis possimus quia deleniti ut hic, expedita vitae.
                                        Beatae facilis velit nobis labore harum ut neque? Temporibus nostrum numquam eum dolorum
                                        aperiam. Asperiores dolorem pariatur delectus illum provident illo nisi? Itaque nam
                                        dolore possimus quas delectus aliquid temporibus aut obcaecati, labore consequuntur
                                        expedita qui amet ducimus autem sapiente! Provident voluptates, facere incidunt
                                        consectetur saepe expedita quia necessitatibus odit iusto reiciendis officia veniam
                                        nulla vel eveniet veritatis commodi? Tempore voluptas saepe pariatur nemo consectetur
                                        doloremque maxime est earum iure ratione neque molestiae molestias quod atque natus
                                        recusandae nesciunt dolore, nisi quia sunt iste minima provident labore necessitatibus.
                                        Earum impedit mollitia sit reiciendis repellat provident fugiat sint voluptatem quaerat
                                        consectetur, ipsum dolore at eius perspiciatis repellendus magnam, autem illo! Tempora
                                        quas incidunt magni nulla voluptates odit ratione, ducimus natus. Quos magnam reiciendis
                                        unde, voluptate et doloribus neque ratione ut voluptatem deserunt veniam dolore ea
                                        commodi aut magni, eligendi quod deleniti quia quaerat expedita placeat totam ad?
                                        Obcaecati autem omnis, eveniet similique eum corrupti facilis neque ea harum maiores,
                                        sed dicta ipsum distinctio voluptas at ratione nesciunt? Aperiam nostrum itaque deserunt
                                        dolores ab accusantium, a amet iure quae doloribus? Quam, earum. Odio consequatur
                                        dolorum laudantium sapiente iure ipsum nihil expedita delectus, laborum culpa doloremque
                                        fugit enim, ex dignissimos nulla possimus obcaecati atque eius? Ea eum voluptatibus
                                        aspernatur. Labore quo explicabo quasi enim. Quasi eius possimus porro voluptates fuga.
                                        Illum eos distinctio esse at adipisci nisi, doloribus cupiditate modi a fugiat! Ullam
                                        hic ex reiciendis. Tempore ratione animi quas facilis omnis maiores et, repudiandae
                                        itaque odio illum illo debitis quae eum nam dolore suscipit, commodi, sed ad quisquam?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>

        <script>
            // GSAP Smooth scroll
            gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
            ScrollTrigger.normalizeScroll(true);
            // create the smooth scroller FIRST!
            let smoother = ScrollSmoother.create({
                smooth: 1,
                effects: true,
                normalizeScroll: true
            });
            // Slideup Section
            if (jQuery("#cbtse-slideup-content-wrapper").length !== 0) {
                const slideupSection = gsap.timeline({
                    scrollTrigger: {
                        trigger: "#cbtse-slideup-content-wrapper",
                        start: "top top",
                        end: "+=" + jQuery(window).height() * 4,
                        scrub: 1,
                        pin: true,
                    },
                });
                gsap.set(
                    "#cbtse-slideup-content-wrapper .cbtse-slideup-content:not(:first-child)",
                    {
                        y: "100vh",
                    }
                );
                slideupSection.to(
                    "#cbtse-slideup-content-wrapper .cbtse-slideup-content:nth-child(2)",
                    {
                        y: "35px",
                        delay: 0.5,
                        duration: 1,
                    }
                );
                slideupSection.to(
                    "#cbtse-slideup-content-wrapper .cbtse-slideup-content:nth-child(1)",
                    {
                        scale: 0.95,
                        delay: 0,
                        duration: 0.5,
                    },
                    "-=1"
                );
                slideupSection.to(
                    "#cbtse-slideup-content-wrapper .cbtse-slideup-content:nth-child(3)",
                    {
                        y: "70px",
                        delay: 0.5,
                        duration: 1,
                    }
                );
                slideupSection.to(
                    "#cbtse-slideup-content-wrapper .cbtse-slideup-content:nth-child(1)",
                    {
                        scale: 0.9,
                        delay: 0.5,
                    },
                    "-=1"
                );
                slideupSection.to(
                    "#cbtse-slideup-content-wrapper .cbtse-slideup-content:nth-child(2)",
                    {
                        scale: 0.95,
                        delay: 0.5,
                    },
                    "-=1"
                );
                slideupSection.to(
                    "#cbtse-slideup-content-wrapper .cbtse-slideup-content:nth-child(4)",
                    {
                        y: "105px",
                        duration: 1,
                    },
                    "+=1"
                );
                slideupSection.to(
                    "#cbtse-slideup-content-wrapper .cbtse-slideup-content:nth-child(1)",
                    {
                        scale: 0.85,
                    },
                    "-=1"
                );
                slideupSection.to(
                    "#cbtse-slideup-content-wrapper .cbtse-slideup-content:nth-child(2)",
                    {
                        scale: 0.9,
                    },
                    "-=1"
                );
                slideupSection.to(
                    "#cbtse-slideup-content-wrapper .cbtse-slideup-content:nth-child(3)",
                    {
                        scale: 0.95,
                    },
                    "-=1"
                );
            }

            // Tab buttons
            jQuery(".cbtse-tab-button1").click(function () {
                // or you could animate the scrollTop:
                gsap.to(smoother, {
                    scrollTop: 0, // 0px from the top
                    duration: 1
                });
            });
            jQuery(".cbtse-tab-button2").click(function () {
                // or you could animate the scrollTop:
                gsap.to(smoother, {
                    scrollTop: jQuery(window).height() * 1.2,
                    duration: 1
                });
            });
            jQuery(".cbtse-tab-button3").click(function () {
                // or you could animate the scrollTop:
                gsap.to(smoother, {
                    scrollTop: jQuery(window).height() * 2.4,
                    duration: 1
                });
            });
            jQuery(".cbtse-tab-button4").click(function () {
                // or you could animate the scrollTop:
                gsap.to(smoother, {
                    scrollTop: jQuery(window).height() * 4,
                    duration: 1
                });
            });
        </script>



        <?php
    }

}