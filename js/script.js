const img = document.querySelector('.img')
const holiday = document.querySelector('#holiday')
const street = document.querySelector('#street')

if(innerWidth < 400  && innerHeight < 600){
    
}

img.addEventListener('mousemove', (e) => {
    const { target } = e
    
    const classAtr = document.createAttribute('class');
    classAtr.value = 'activeLabel';

    if(street.classList.contains('activeLabel')){
        setTimeout(()=> {
            street.classList.remove('activeLabel');
        },1000)
    }
    else{
        setTimeout(()=> {
            street.setAttributeNode(classAtr,'activeLabel');
        },1000)
    }   

    if(holiday.classList.contains('activeLabel')){
        setTimeout(()=> {
            holiday.classList.remove('activeLabel');
        },1000)
    }
    else{
        setTimeout(()=> {
            holiday.setAttributeNode(classAtr, 'activeLabel');
        },1000)
    }

    if (img.classList.contains('img')) {
        img.classList.add('activeImg')
    }

    setTimeout(() => {
        const attribute = document.createAttribute('data-img')
        attribute.value = 'img'
        img.setAttributeNode(attribute)
    },1000)

    if (target.dataset.img) {
        img.classList.remove('activeImg') 
        setTimeout(() => {
            img.removeAttribute('data-img')
        },1000)
    } 
})

$(document).ready(function() {
    /*
    * Plugin intialization
    */
    $('#pagepiling').pagepiling({
        menu: '#menu',
        anchors: ['page1', 'page2', 'page3', 'page4'],
        sectionsColor: ['#d0b084', '#afacb7', '#CDB2AC', '#f5f5dc'],
        navigation: {
            'position': 'right',
               'tooltips': ['Приветствие', 'Наши работы', 'Услуги', 'Записаться']
           },
        afterRender: function(){
            $('#pp-nav').addClass('custom');
        },
        afterLoad: function(anchorLink, index){
            if(index>1){
                $('#pp-nav').removeClass('custom');
            }else{
                $('#pp-nav').addClass('custom');
            }
        }
    });
    /*
    * Internal use of the demo website
    */
    $('#showExamples').click(function(e){
        e.stopPropagation();
        e.preventDefault();
        $('#examplesList').toggle();
    });

    $('html').click(function(){
        $('#examplesList').hide();
    });
});