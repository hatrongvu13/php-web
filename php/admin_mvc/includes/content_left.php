<div id="sidebar" class="left">
    	<div class="sidebar_box"><span class="bottom"></span>
            <h3>Chủ đề hoa</h3>   
            <div class="content"> 
                <ul class="sidebar_list">
                    <?php
					include_once("models/m_chu_de.php");
					$m_chude = new M_chu_de();
					$list_cd = $m_chude->Doc_chu_de();
					//print_r($list_cd);
					
					foreach($list_cd as $cd) {
					?>
                    <li><a href="hoa_theo_chu_de.php?MaCD=<?php echo $cd->ma; ?>"><?php echo $cd->ten; ?></a></li>
                    <?php
					}
					?>
                </ul>
            </div>
        </div>
        
    </div>