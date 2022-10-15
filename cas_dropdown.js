$(document).ready(function(){
    var $cat = $('select[name=category]'),
        $items = $('select[name=items]');

    $cat.change(function(){
        var $this = $(this).find(':selected'),
            rel = $this.attr('rel'),
            $set = $items.find('option.' + rel);
        
        if ($set.size() < 0) {
            $items.hide();
            return;
        }
        
        $items.show().find('option').hide();
        
        $set.show().first().prop('selected', true);
    });
});