jQuery(document).ready(function($) {

    // 1. 모바일 메뉴 토글 기능
    $('#mobile-menu-btn').on('click', function() {
        $('#main-menu').toggleClass('active'); // active 클래스 추가/제거
        $(this).find('i').toggleClass('fa-bars fa-times'); // 아이콘 변경 (햄버거 <-> X)
    });

    // 2. 자동 목차 생성 (기존 유지)
    function generateTOC() {
        var $content = $('.post-body');
        var $headers = $content.find('h2');
        
        if ($headers.length < 2) return;

        var tocHtml = '<div id="post-toc"><h3>목차 <span id="toc-status" style="font-size:12px; cursor:pointer;">[숨기기]</span></h3><div id="toc-content"><ul>';
        
        $headers.each(function(index) {
            var id = 'toc-section-' + index;
            $(this).attr('id', id);
            tocHtml += '<li><a href="#' + id + '">' + $(this).text() + '</a></li>';
        });
        
        tocHtml += '</ul></div></div>';
        
        $headers.first().before(tocHtml);
        
        $('#post-toc h3').on('click', function() {
            $('#toc-content').slideToggle();
        });
    }
    
    if($('body').hasClass('single')) {
        generateTOC();
    }

    // 3. 팝업, 링크 복사 등 기타 기능 (필요시 기존 코드 유지)
});
