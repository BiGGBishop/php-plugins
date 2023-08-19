
          	<div class="col-md-12 main-index">
            
            <div class="xd_top_box">
             <?php echo $ads_720x90; ?>
            </div>
            
              	<h2 id="title"><?php echo $data['tool_name']; ?></h2>
                
                <br />
                
                <?php if ($pointOut != 'output') { ?>
      
               <form method="POST" action="<?php echo $toolOutputURL;?>" onsubmit="return doCheck();"> 
			
            	<div class="form-group">
					<label><?php trans('Daily page impressions', $lang['AD7']); ?></label>
					<input placeholder="<?php trans('Type your daily page impressions', $lang['AD8']); ?>" type="text" name="impressions" class="form-control" />
				</div>	
                
               	<div class="form-group">
					<label><?php trans('Page CTR (in percentage %)', $lang['AD9']); ?></label>
					<input placeholder="<?php trans('Type your CTR in %', $lang['AD10']); ?>" type="text" name="ctr" class="form-control" />
				</div>
                
   	            <div class="form-group">
					<label><?php trans('Cost per click ($)', $lang['AD11']); ?></label>
					<input placeholder="<?php trans('Type your cost per click', $lang['AD12']); ?>" type="text" name="cpr" class="form-control" />
				</div>		
                
               <br />
               <?php
               if ($toolCap)
               {
               echo $captchaCode;   
               }
               ?>
               <div class="text-center">
                   <input class="btn btn-info" type="submit" value="<?php trans('Calculate Earning', $lang['AD13']); ?>" name="submit"/>
               </div>
               </form>     
                          
               <?php 
               } else { 
               //Output Block
               if(isset($error)) {
                
                echo '<br/><br/><div class="alert alert-error">
                <strong>Alert!</strong> '.$error.'
                </div><br/><br/>
                <div class="text-center"><a class="btn btn-info" href="'.$toolURL.'">'.$lang['12'].'</a>
                </div><br/>';
                
               } else {
               ?>
        <h3 id="outBox"><?php trans('Earning Result', $lang['AD14']); ?></h3>
        <br />
              <table class="table table-bordered table-striped">
                <tbody>
                    <tr><td style="width: 50%;"><?php trans('Daily page impressions', $lang['AD7']); ?></td><td><?php echo $impressions; ?></td></tr>
                    <tr><td style="width: 50%;"><?php trans('Page CTR', $lang['AD15']); ?></td><td><?php echo $ctr; ?>%</td></tr>
                    <tr><td style="width: 50%;"><?php trans('Cost per click', $lang['AD16']); ?></td><td>$<?php echo $cpr; ?></td></tr>
             </tbody></table>
             
             <div class="row">
             
             <div class="col-md-6">
              <table id="outTable" class="table table-bordered table-striped">
                <tbody>
                    <tr><td style="width: 50%;"><?php trans('Daily Earnings', $lang['AD17']); ?></td><td>$<?php echo $dailyEarnings; ?></td></tr>
                    <tr><td style="width: 50%;"><?php trans('Monthhly Earnings', $lang['AD18']); ?></td><td>$<?php echo $monthlyEarnings; ?></td></tr>
                    <tr><td style="width: 50%;"><?php trans('Yearly Earnings', $lang['AD19']); ?></td><td>$<?php echo $yearlyEarnings; ?></td></tr>
             </tbody></table>
             </div>
             
             <div class="col-md-6">
              <table id="outTable" class="table table-bordered table-striped">
                <tbody>
                    <tr><td style="width: 50%;"><?php trans('Daily Clicks', $lang['AD20']); ?></td><td><?php echo $dailyClicks; ?></td></tr>
                    <tr><td style="width: 50%;"><?php trans('Monthly Clicks', $lang['AD21']); ?></td><td><?php echo $monthlyClicks; ?></td></tr>
                    <tr><td style="width: 50%;"><?php trans('Yearly Clicks', $lang['AD22']); ?></td><td><?php echo $yearlyClicks; ?></td></tr>
             </tbody></table>
             </div>
             
             </div>

    <div class="text-center">
    <br /> &nbsp; <br />
    <a class="btn btn-info" href="<?php echo $toolURL; ?>"><?php trans('Try New Values', $lang['AD23']); ?></a>
    <br />
    </div>

<?php } } ?>

<br />

<div class="xd_top_box">
<?php echo $ads_720x90; ?>
</div>

<h2 id="sec1" class="about_tool"><?php echo $lang['11'].' '.$data['tool_name']; ?></h2>
<p>
<?php echo $data['about_tool']; ?>
</p> <br />
</div>          		
        </div>
    </div> <br />
    
<script>
<?php if ($pointOut == 'output') { ?>
jQuery(document).ready(function(){
    setTimeout(function(){
	var pos = $('#outBox').offset();
	$('body,html').animate({ scrollTop: pos.top });
	}, 100);
});
<?php } ?>
function doCheck(){
    var impressions = jQuery.trim($('input[name=impressions]').val());
    var cpr = jQuery.trim($('input[name=cpr]').val());
    var ctr = jQuery.trim($('input[name=ctr]').val());
    if (ctr == null || ctr== "" || cpr == null || cpr == "" || impressions == null || impressions == "") {
        alert("<?php makeJavascriptStr($lang['RF47'], true); ?>");
        return false;
    }
    return true;
}
</script>