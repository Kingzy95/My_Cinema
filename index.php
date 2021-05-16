<?php 
include('box_office.php');
$box_office = box_office();
?>

<?php include 'includes/header.php'; ?>

<div class="container two-col-example">
        <div class="row">
            <div class="col-lg-6 col-xs-12 m-auto">
                <h2></h2>
                <div class="card-deck mb-1 text-center">
                    <div class="card card-pr mb-4 box-shadow">
                        <div class="card-body">
                            <i class="fas fa-shield-alt fa-4x com-icon"></i>
                            <h4 class="card-title pricing-card-title text-white">Espace Membres</h4>
                            <p class="mt-3 mb-4 text-white">Retrouvez tous les membres de notre plateforme.</p>
                            <div class="main-button">
                                <button type="button" onclick="window.location='member.php'" class="btn btn-primary com-button">En savoir plus</button>
                            </div>
                        </div>
                    </div>
                    <div class="card card-pr mb-4 box-shadow">
                        <div class="card-body">
                            <i class="fas fa-shield-alt fa-4x com-icon"></i>
                            <h4 class="card-title pricing-card-title text-white">Abonnements</h4>
                            <p class="mt-3 mb-4 text-white">Retrouvez tous les abonnements que nous proposons.</p>
                            <div class="main-button">
                                <button type="button" onclick="window.location='pass.php'" class="btn btn-primary com-button">En savoir plus</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-deck mb-1 text-center">
                    <div class="card card-pr mb-4 box-shadow">
                        <div class="card-body">
                            <i class="fas fa-shield-alt fa-4x com-icon"></i>
                            <h4 class="card-title pricing-card-title text-white">Films</h4>
                            <p class="mt-3 mb-4 text-white">Retrouvez les divers films que nous proposons.</p>
                            <div class="main-button">
                                <button type="button" onclick="window.location='films.php'" class="btn btn-primary com-button">En savoir plus</button>
                            </div>
                        </div>
                    </div>
                    <div class="card card-pr mb-4 box-shadow">
                        <div class="card-body">
                            <i class="fas fa-shield-alt fa-4x com-icon"></i>
                            <h4 class="card-title pricing-card-title text-white">Commentaires</h4>
                            <p class="mt-3 mb-4 text-white">N'hesitez pas a commenter nos films, car votre avis compte !</p>
                            <div class="main-button">
                                <button type="button" onclick="window.location='avis.php'" class="btn btn-primary com-button">En savoir plus</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<script>
    $(document).ready(function()
{
"use strict";

var menuActive = false;
var header = $('.header');
setHeader();
initCustomDropdown();
initPageMenu();

function setHeader()
{

if(window.innerWidth > 991 && menuActive)
{
closeMenu();
}
}

function initCustomDropdown()
{
if($('.custom_dropdown_placeholder').length && $('.custom_list').length)
{
var placeholder = $('.custom_dropdown_placeholder');
var list = $('.custom_list');
}

placeholder.on('click', function (ev)
{
if(list.hasClass('active'))
{
list.removeClass('active');
}
else
{
list.addClass('active');
}

$(document).one('click', function closeForm(e)
{
if($(e.target).hasClass('clc'))
{
$(document).one('click', closeForm);
}
else
{
list.removeClass('active');
}
});

});

$('.custom_list a').on('click', function (ev)
{
ev.preventDefault();
var index = $(this).parent().index();

placeholder.text( $(this).text() ).css('opacity', '1');

if(list.hasClass('active'))
{
list.removeClass('active');
}
else
{
list.addClass('active');
}
});


$('select').on('change', function (e)
{
placeholder.text(this.value);

$(this).animate({width: placeholder.width() + 'px' });
});
}

/*

4. Init Page Menu

*/

function initPageMenu()
{
if($('.page_menu').length && $('.page_menu_content').length)
{
var menu = $('.page_menu');
var menuContent = $('.page_menu_content');
var menuTrigger = $('.menu_trigger');

//Open / close page menu
menuTrigger.on('click', function()
{
if(!menuActive)
{
openMenu();
}
else
{
closeMenu();
}
});

//Handle page menu
if($('.page_menu_item').length)
{
var items = $('.page_menu_item');
items.each(function()
{
var item = $(this);
if(item.hasClass("has-children"))
{
item.on('click', function(evt)
{
evt.preventDefault();
evt.stopPropagation();
var subItem = item.find('> ul');
if(subItem.hasClass('active'))
{
subItem.toggleClass('active');
TweenMax.to(subItem, 0.3, {height:0});
}
else
{
subItem.toggleClass('active');
TweenMax.set(subItem, {height:"auto"});
TweenMax.from(subItem, 0.3, {height:0});
}
});
}
});
}
}
}

function openMenu()
{
var menu = $('.page_menu');
var menuContent = $('.page_menu_content');
TweenMax.set(menuContent, {height:"auto"});
TweenMax.from(menuContent, 0.3, {height:0});
menuActive = true;
}

function closeMenu()
{
var menu = $('.page_menu');
var menuContent = $('.page_menu_content');
TweenMax.to(menuContent, 0.3, {height:0});
menuActive = false;
}


});
    </script>
</body>
</html>