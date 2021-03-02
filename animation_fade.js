document.addEventListener('DOMContentLoaded', function(){
    $(window).on({
        scroll: function(e){
            var startY = document.querySelector('#service-2').getBoundingClientRect().top,
                windowHeight = window.innerHeight,// ブラウザの高さ
                offset = (windowHeight/4) * 3 //オフセット 画面の2/3
        // 表示
            if(startY < offset){
                document.querySelector('#service-2').classList.add('grid-img--in');
                          // ブラウザの外になったら消す
            }else if(startY > windowHeight){
                document.querySelector('#service-2').classList.remove('grid-img--in');
                }
            },
        });
    });