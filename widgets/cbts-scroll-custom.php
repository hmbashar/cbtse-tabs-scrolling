<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class CB_Tabs_Scrolling extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'cbtse_tabs_scrolling';
    }

    public function get_title()
    {
        return __('CB Tabs with Scrolling', 'cbtse');
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
       <div class="content-something">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere odio quod ducimus praesentium veritatis eos rerum deleniti autem quaerat recusandae libero earum sed laborum ad sunt ipsa, exercitationem, doloribus odit asperiores? Nulla, dolorem est. Assumenda recusandae illo repudiandae. Quis autem iusto at commodi dolor eveniet temporibus assumenda et repellendus distinctio esse cum maxime porro, nostrum id aliquid voluptates? Doloribus a voluptas laudantium exercitationem cum praesentium cupiditate veritatis recusandae ullam ratione corrupti neque error molestias eveniet impedit dignissimos, illo corporis? Eaque consectetur ut quod molestias magnam rerum, labore nemo dolor provident velit qui ab, nobis inventore corporis odio voluptatem. Consectetur architecto, aspernatur delectus atque vitae tenetur distinctio quis aperiam possimus. Laborum non magni quo explicabo rem perspiciatis sed adipisci iste commodi qui quia sint voluptate molestiae, distinctio natus consequatur aspernatur tenetur blanditiis vel similique dignissimos ullam sapiente? Magnam vitae repellat, necessitatibus praesentium eos quo, distinctio, a cupiditate officia eum molestias culpa!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere odio quod ducimus praesentium veritatis eos rerum deleniti autem quaerat recusandae libero earum sed laborum ad sunt ipsa, exercitationem, doloribus odit asperiores? Nulla, dolorem est. Assumenda recusandae illo repudiandae. Quis autem iusto at commodi dolor eveniet temporibus assumenda et repellendus distinctio esse cum maxime porro, nostrum id aliquid voluptates? Doloribus a voluptas laudantium exercitationem cum praesentium cupiditate veritatis recusandae ullam ratione corrupti neque error molestias eveniet impedit dignissimos, illo corporis? Eaque consectetur ut quod molestias magnam rerum, labore nemo dolor provident velit qui ab, nobis inventore corporis odio voluptatem. Consectetur architecto, aspernatur delectus atque vitae tenetur distinctio quis aperiam possimus. Laborum non magni quo explicabo rem perspiciatis sed adipisci iste commodi qui quia sint voluptate molestiae, distinctio natus consequatur aspernatur tenetur blanditiis vel similique dignissimos ullam sapiente? Magnam vitae repellat, necessitatibus praesentium eos quo, distinctio, a cupiditate officia eum molestias culpa!</p>
       </div>

        <div class="cbtse-gostan-scrolling-effect-area">
            <div class="cbtse-gostan-scrolling-effect-menu-area">
                <ul>
                    <li><a href="#content-1">Menu 1</a></li>
                    <li><a href="#content-2">Menu 2</a></li>
                    <li><a href="#content-3">Menu 3</a></li>
                    <li><a href="#content-4">Menu 4</a></li>
                    <li><a href="#content-5">Menu 5</a></li>
                </ul>
            </div>
            <div class="cbtse-gostan-scrolling-effect-contents-area">
                <!--Single Scrolling Content-->
                <div class="cbtse-gostan-scrolling-e-single-content-area" id="content-1">
                    <h2>This is content here from first heading 1</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, ullam vero blanditiis error ipsum praesentium reiciendis distinctio commodi vel nihil veritatis, pariatur magni, corrupti sequi reprehenderit iste eaque quae? Officiis aperiam eius perspiciatis quidem at autem, explicabo veritatis fuga quam amet aut commodi quas praesentium nisi ab dolore harum recusandae nesciunt molestias vel odio possimus ad voluptatem velit. Officiis blanditiis esse nisi aliquid nesciunt tenetur saepe sunt excepturi ducimus, molestias quidem ratione corrupti alias velit incidunt laudantium aspernatur sed vel cumque. Labore ea corporis aliquam perferendis harum cumque ducimus deleniti culpa ipsum minima, rerum odio laborum fugiat, nostrum neque ab assumenda esse accusamus impedit? Earum laboriosam error consequatur dolorem molestiae, amet aliquam dolores cumque aliquid necessitatibus optio temporibus maxime recusandae harum similique quaerat sapiente? Deleniti odio illum recusandae quisquam atque,</p>
                </div><!--Single Scrolling Content-->
                <!--Single Scrolling Content-->
                <div class="cbtse-gostan-scrolling-e-single-content-area" id="content-2">
                    <h2>This is content here from first heading 2</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, ullam vero blanditiis error ipsum praesentium reiciendis distinctio commodi vel nihil veritatis, pariatur magni, corrupti sequi reprehenderit iste eaque quae? Officiis aperiam eius perspiciatis quidem at autem, explicabo veritatis fuga quam amet aut commodi quas praesentium nisi ab dolore harum recusandae nesciunt molestias vel odio possimus ad voluptatem velit. Officiis blanditiis esse nisi aliquid nesciunt tenetur saepe sunt excepturi ducimus, molestias quidem ratione corrupti alias velit incidunt laudantium aspernatur sed vel cumque. Labore ea corporis aliquam perferendis harum cumque ducimus deleniti culpa ipsum minima, rerum odio laborum fugiat, nostrum neque ab assumenda esse accusamus impedit? Earum laboriosam error consequatur dolorem molestiae, amet aliquam dolores cumque aliquid necessitatibus optio temporibus maxime recusandae harum similique quaerat sapiente? Deleniti odio illum recusandae quisquam atque,</p>
                </div><!--Single Scrolling Content-->
                <!--Single Scrolling Content-->
                <div class="cbtse-gostan-scrolling-e-single-content-area" id="content-3">
                    <h2>This is content here from first heading 3</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, ullam vero blanditiis error ipsum praesentium reiciendis distinctio commodi vel nihil veritatis, pariatur magni, corrupti sequi reprehenderit iste eaque quae? Officiis aperiam eius perspiciatis quidem at autem, explicabo veritatis fuga quam amet aut commodi quas praesentium nisi ab dolore harum recusandae nesciunt molestias vel odio possimus ad voluptatem velit. Officiis blanditiis esse nisi aliquid nesciunt tenetur saepe sunt excepturi ducimus, molestias quidem ratione corrupti alias velit incidunt laudantium aspernatur sed vel cumque. Labore ea corporis aliquam perferendis harum cumque ducimus deleniti culpa ipsum minima, rerum odio laborum fugiat, nostrum neque ab assumenda esse accusamus impedit? Earum laboriosam error consequatur dolorem molestiae, amet aliquam dolores cumque aliquid necessitatibus optio temporibus maxime recusandae harum similique quaerat sapiente? Deleniti odio illum recusandae quisquam atque,</p>
                </div><!--Single Scrolling Content-->
                <!--Single Scrolling Content-->
                <div class="cbtse-gostan-scrolling-e-single-content-area" id="content-4">
                    <h2>This is content here from first heading 4</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, ullam vero blanditiis error ipsum praesentium reiciendis distinctio commodi vel nihil veritatis, pariatur magni, corrupti sequi reprehenderit iste eaque quae? Officiis aperiam eius perspiciatis quidem at autem, explicabo veritatis fuga quam amet aut commodi quas praesentium nisi ab dolore harum recusandae nesciunt molestias vel odio possimus ad voluptatem velit. Officiis blanditiis esse nisi aliquid nesciunt tenetur saepe sunt excepturi ducimus, molestias quidem ratione corrupti alias velit incidunt laudantium aspernatur sed vel cumque. Labore ea corporis aliquam perferendis harum cumque ducimus deleniti culpa ipsum minima, rerum odio laborum fugiat, nostrum neque ab assumenda esse accusamus impedit? Earum laboriosam error consequatur dolorem molestiae, amet aliquam dolores cumque aliquid necessitatibus optio temporibus maxime recusandae harum similique quaerat sapiente? Deleniti odio illum recusandae quisquam atque,</p>
                </div><!--Single Scrolling Content-->
                <!--Single Scrolling Content-->
                <div class="cbtse-gostan-scrolling-e-single-content-area" id="content-5">
                    <h2>This is content here from first heading 5</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, ullam vero blanditiis error ipsum praesentium reiciendis distinctio commodi vel nihil veritatis, pariatur magni, corrupti sequi reprehenderit iste eaque quae? Officiis aperiam eius perspiciatis quidem at autem, explicabo veritatis fuga quam amet aut commodi quas praesentium nisi ab dolore harum recusandae nesciunt molestias vel odio possimus ad voluptatem velit. Officiis blanditiis esse nisi aliquid nesciunt tenetur saepe sunt excepturi ducimus, molestias quidem ratione corrupti alias velit incidunt laudantium aspernatur sed vel cumque. Labore ea corporis aliquam perferendis harum cumque ducimus deleniti culpa ipsum minima, rerum odio laborum fugiat, nostrum neque ab assumenda esse accusamus impedit? Earum laboriosam error consequatur dolorem molestiae, amet aliquam dolores cumque aliquid necessitatibus optio temporibus maxime recusandae harum similique quaerat sapiente? Deleniti odio illum recusandae quisquam atque,</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, ullam vero blanditiis error ipsum praesentium reiciendis distinctio commodi vel nihil veritatis, pariatur magni, corrupti sequi reprehenderit iste eaque quae? Officiis aperiam eius perspiciatis quidem at autem, explicabo veritatis fuga quam amet aut commodi quas praesentium nisi ab dolore harum recusandae nesciunt molestias vel odio possimus ad voluptatem velit. Officiis blanditiis esse nisi aliquid nesciunt tenetur saepe sunt excepturi ducimus, molestias quidem ratione corrupti alias velit incidunt laudantium aspernatur sed vel cumque. Labore ea corporis aliquam perferendis harum cumque ducimus deleniti culpa ipsum minima, rerum odio laborum fugiat, nostrum neque ab assumenda esse accusamus impedit? Earum laboriosam error consequatur dolorem molestiae, amet aliquam dolores cumque aliquid necessitatibus optio temporibus maxime recusandae harum similique quaerat sapiente? Deleniti odio illum recusandae quisquam atque,</p>
                </div><!--Single Scrolling Content-->
            </div>
        </div>

        <div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime atque ut beatae quaerat. Itaque natus blanditiis aliquid provident distinctio placeat quis dolorem alias harum quisquam quo saepe dignissimos vero assumenda illo, non commodi maxime autem! Distinctio vel excepturi quidem eum, nesciunt deleniti ratione quo assumenda laborum dolorem? Illo rerum similique harum animi non inventore consectetur ut, exercitationem consequatur? Ipsum maxime impedit ad, quae dignissimos reprehenderit iure consequatur et atque aperiam voluptatem, voluptates quisquam corporis dolor eaque inventore! Praesentium iusto accusantium, soluta dolorum tempore cumque dolor provident pariatur et saepe consequuntur. Ea cumque ipsa quis nemo placeat quos mollitia id illo ullam officia, optio incidunt qui expedita, accusantium eos sequi voluptas? Soluta ex beatae, maiores, dolores voluptatum porro nihil molestiae, sunt eligendi tempora facere perspiciatis aperiam. Ipsam sequi voluptas qui a porro praesentium delectus. Nobis quas consequatur, quisquam fugit aut minima possimus recusandae eaque autem, iste laboriosam, vel neque magnam sed.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime atque ut beatae quaerat. Itaque natus blanditiis aliquid provident distinctio placeat quis dolorem alias harum quisquam quo saepe dignissimos vero assumenda illo, non commodi maxime autem! Distinctio vel excepturi quidem eum, nesciunt deleniti ratione quo assumenda laborum dolorem? Illo rerum similique harum animi non inventore consectetur ut, exercitationem consequatur? Ipsum maxime impedit ad, quae dignissimos reprehenderit iure consequatur et atque aperiam voluptatem, voluptates quisquam corporis dolor eaque inventore! Praesentium iusto accusantium, soluta dolorum tempore cumque dolor provident pariatur et saepe consequuntur. Ea cumque ipsa quis nemo placeat quos mollitia id illo ullam officia, optio incidunt qui expedita, accusantium eos sequi voluptas? Soluta ex beatae, maiores, dolores voluptatum porro nihil molestiae, sunt eligendi tempora facere perspiciatis aperiam. Ipsam sequi voluptas qui a porro praesentium delectus. Nobis quas consequatur, quisquam fugit aut minima possimus recusandae eaque autem, iste laboriosam, vel neque magnam sed.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime atque ut beatae quaerat. Itaque natus blanditiis aliquid provident distinctio placeat quis dolorem alias harum quisquam quo saepe dignissimos vero assumenda illo, non commodi maxime autem! Distinctio vel excepturi quidem eum, nesciunt deleniti ratione quo assumenda laborum dolorem? Illo rerum similique harum animi non inventore consectetur ut, exercitationem consequatur? Ipsum maxime impedit ad, quae dignissimos reprehenderit iure consequatur et atque aperiam voluptatem, voluptates quisquam corporis dolor eaque inventore! Praesentium iusto accusantium, soluta dolorum tempore cumque dolor provident pariatur et saepe consequuntur. Ea cumque ipsa quis nemo placeat quos mollitia id illo ullam officia, optio incidunt qui expedita, accusantium eos sequi voluptas? Soluta ex beatae, maiores, dolores voluptatum porro nihil molestiae, sunt eligendi tempora facere perspiciatis aperiam. Ipsam sequi voluptas qui a porro praesentium delectus. Nobis quas consequatur, quisquam fugit aut minima possimus recusandae eaque autem, iste laboriosam, vel neque magnam sed.</p>
        </div>


    
        <script>

jQuery(document).ready(function($) {
    const container = $('.cbtse-gostan-scrolling-effect-contents-area');
    const items = $('.cbtse-gostan-scrolling-e-single-content-area');
    const originalHeight = container.height();
    const gap = 30;
    const ratio = 4;
    const extraHeight = gap * ratio;
    const lastItem = items.last();
    const lastItemHeight = lastItem.outerHeight();
    let heightAdjusted = false;

      // Smooth scrolling for menu links
      $('.cbtse-gostan-scrolling-effect-menu-area a').on('click', function(event) {
        event.preventDefault();
        const target = $(this.getAttribute('href'));
        if (target.length) {
            $('html, body').stop().animate({
                scrollTop: target.offset().top - container.offset().top + container.scrollTop()
            }, 1000);
        }
    });

    container.on('scroll', function() {
        const containerTop = container.offset().top;
        const containerScrollTop = container.scrollTop();
        const containerHeight = container.height();
        const containerScrollHeight = container[0].scrollHeight;

        items.each(function(index) {
            const item = $(this);
            const topOffset = index * gap; // The first element gets 0, the second 30px, etc.
            const itemOffsetTop = item.offset().top - containerTop;

            if (itemOffsetTop <= topOffset) {
                item.addClass('cbtse-gostan-position-fixed');
                item.css('top', topOffset + 'px'); // Apply the calculated top offset
                item.css('z-index', 100 + index); // Ensures the current item is on top
            } else {
                item.removeClass('cbtse-gostan-position-fixed');
                item.css('top', ''); // Reset top value when not fixed
                item.css('z-index', 99 + index); // Ensures the item is in view
            }
        });

        // Adjust container height to accommodate the last item
        if (!heightAdjusted && containerScrollTop + containerHeight >= containerScrollHeight - lastItemHeight) {
            container.css('height', lastItemHeight + extraHeight + 50 + 'px').css('padding-bottom', 0);
            heightAdjusted = false;
        }

        // Revert to original height when scrolling back to the top
        if (heightAdjusted && containerScrollTop + containerHeight < containerScrollHeight - lastItemHeight) {
            container.css('height', originalHeight).css('padding-bottom', '100px');
            heightAdjusted = false;
        }
    });
});
</script>

<?php
    }

}