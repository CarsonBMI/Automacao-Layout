<?php
 
      
  $sperfil_layout_grid = [oc_perfil_layout_grid];
 
  echo "
      <style>
          html{
              visibility: hidden;
          }
	   </style>

    <script>
        window.onload = () => {

            function onClickButton() {
				if(document.querySelector('#save_grid_top') == null){
					document.getElementsByTagName(\"html\")[0].style.visibility = \"visible\";
					return;
				}
                function waitUntilElementLoad(selector,  delay) {
                    if(document.querySelector(selector) != null){
                        $(selector).trigger('click');
                        return;
                    } 
                    else {
                        setTimeout(()=>waitUntilElementLoad(selector, delay), delay);
                    }
                }
                waitUntilElementLoad('#save_grid_top', 1000);
                
                function aplicate(selector1, selector2, delay){
                    if(document.querySelector(selector1) == null && document.querySelector(selector2) != null){
                        $(selector2).trigger('click');
                        document.getElementsByTagName(\"html\")[0].style.visibility = \"visible\";
                        return;
                    }
                
                    else if(document.querySelector(selector1) != null && document.querySelector(selector2) != null){
                            $(selector1).trigger('click');
                            waitUntilElementLoad(selector2, delay);
                            document.getElementsByTagName(\"html\")[0].style.visibility = \"visible\";
                            return;
                        } 
                    else {
                        setTimeout(()=>aplicate(selector1, selector2, delay), delay);
                    }
                }
                
                aplicate('a[onclick*=\"" . $sperfil_layout_grid . "\"]', '#Bsair', 1000);
                    
            }
            
            onClickButton();
        }
    </script>
";

?>