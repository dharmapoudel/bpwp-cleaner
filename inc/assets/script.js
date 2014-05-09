jQuery(function($){
    //globals here, in CAPS

    var BPWPC_Setup = {
        init : function () {
			
        	var $this = this;
			//prevent default behaviour on links with #
			$("a[href='#']").on('click',function(e){e.preventDefault();});
			
			//select all
			$('.select_all').on('click', function(e){
				$(this).parents('table').find('input[type="checkbox"]').each(function(){
					$(this).attr('checked', true);
				});
				$this.hideMsgBox();
			});
			
			//deselect all
			$('.deselect_all').on('click', function(e){
				$(this).parents('table').find('input[type="checkbox"]').each(function(){
					$(this).attr('checked', false);
				});
				$this.hideMsgBox();
			});
			
			//invert selection
			$('.invert_selection').on('click', function(e){
				$(this).parents('table').find('input[type="checkbox"]').each(function(){
					$(this).prop('checked', !$(this).prop('checked'));
				});
				$this.hideMsgBox();
			});
			
			//
			$('#remove_login_errors').on('click', function(){
				$(this).parents('tr').next('tr').fadeToggle();
			});

			$this.hideMsgBox();
			
        },
        hideMsgBox: function(){

        	$('#login_errors_msg').parents('tr').fadeIn();
        	if(!$('#remove_login_errors').attr('checked')){
					$('#login_errors_msg').parents('tr').fadeOut();
			}

        }
    };
    BPWPC_Setup.init();
});