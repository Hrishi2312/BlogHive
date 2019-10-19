<?php  
                $i = 0;
                        
                while ($i<sizeof($rs_result)) {
                        
                $row = $rs_result[$i];    
            ?>  
<div>
   <label>Topic</label>
       <select name="topic" class = "text-input">
            <option value="<?php echo $row['topic']?>"><?php echo $row['topic']?></option>
            
            </select>
</div>
<?php
                $i++;
            };  
            ?>