<?php include 'header.php'; ?>

	<svg xmlns="http://www.w3.org/2000/svg" class="svg-filters">
	  <filter id="duotone_peachypink">
	    <feColorMatrix type="matrix" result="grayscale"
	      values="1 0 0 0 0
	              1 0 0 0 0
	              1 0 0 0 0
	              0 0 0 1 0" />
	    
	    <feComponentTransfer color-interpolation-filters="sRGB" result="duotone_magenta_gold">
	      <feFuncR type="table" tableValues="0.1 0.2"></feFuncR>
	      <feFuncG type="table" tableValues="0.1 0.2"></feFuncG>
	      <feFuncB type="table" tableValues="0.1 0.2"></feFuncB>
	      <feFuncA type="table" tableValues="0 1"></feFuncA>
	    </feComponentTransfer> 
	  </filter>

	  <filter id="duotone_blackonblack">
	    <feColorMatrix type="matrix" result="grayscale"
	      values="1 0 0 0 0
	              1 0 0 0 0
	              1 0 0 0 0
	              0 0 0 1 0" />
	    
	    <feComponentTransfer color-interpolation-filters="sRGB" result="duotone_black">
	      <feFuncR type="table" tableValues="0.1 0.25"></feFuncR>
	      <feFuncG type="table" tableValues="0.1 0.25"></feFuncG>
	      <feFuncB type="table" tableValues="0.1 0.25"></feFuncB>
	      <feFuncA type="table" tableValues="0 1"></feFuncA>
	    </feComponentTransfer> 
	  </filter>
	  
	  <filter id="duotone_navyorange">
	    <feColorMatrix type="matrix" result="grayscale"
	      values="1 0 0 0 0
	              1 0 0 0 0
	              1 0 0 0 0
	              0 0 0 1 0" />
	    
	    <feComponentTransfer color-interpolation-filters="sRGB" result="duotone_navy_orange">
	      <feFuncR type="table" tableValues="0.6078431373 0.8784313725"></feFuncR>
	      <feFuncG type="table" tableValues="0.08235294118 0.8352941176"></feFuncG>
	      <feFuncB type="table" tableValues="0.3960784314 0.0392156862"></feFuncB>
	      <feFuncA type="table" tableValues="0 1"></feFuncA>
	    </feComponentTransfer> 
	  </filter>   
	</svg>

	
	<!-- Hero -->
	<section class="section__hero">
		
		<svg version="1.1" class="crest" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 viewBox="0 0 1440 900" style="enable-background:new 0 0 1440 900;" xml:space="preserve">
			<style type="text/css">
				.st0{fill:#EAEAEA;}
				.st1{fill:#07B7F9;}
				.st2{fill:#F4F4F4;}
				.st3{fill:#363636;}
			</style>
			<path id="logo" class="st0" d="M338.6,121l379.9,658l379.9-658H338.6z M398.6,155.6h137l182.9,316.9l182.9-316.9h137L718.5,709.7
				L398.6,155.6z M860.7,157L718.5,403.2L576.4,157H860.7z"/>
			<g id="frondend-background">
				<path class="st1" d="M287.1,446.3h577.4v55.8H287.1V446.3z"/>
			</g>
			<g id="frontend">
				<polygon class="st2" points="317.2,463.4 317.2,467.5 307.6,467.5 307.6,472 316.8,472 316.8,476.1 307.6,476.1 307.6,484.3 
					303,484.3 303,463.5 317.2,463.5 	"/>
				<path class="st2" d="M343.5,476.8c2.7-1,4-3.2,4-6.5h0c0-2.4-0.6-4.2-2-5.3c-1.4-1.1-3.7-1.6-6.9-1.6h-7.9v20.8h4.6v-6.6h3.2
					l4.6,6.6h5.7L343.5,476.8z M341.9,472.8c-0.5,0.5-1.6,0.8-3.2,0.8h-3.4v-6.2h3.5c1.5,0,2.5,0.2,3.1,0.6c0.6,0.4,0.9,1.2,0.9,2.3
					C342.8,471.5,342.5,472.3,341.9,472.8z"/>
				<path class="st2" d="M379.1,465.9c-2.1-2.1-4.7-3.1-7.8-3.1s-5.7,1-7.8,3.1c-2.1,2.1-3.2,4.6-3.2,7.7c0,3.1,1.1,5.6,3.2,7.7
					c2.1,2.1,4.7,3.1,7.8,3.1c3.1,0,5.7-1,7.8-3.1c2.1-2,3.2-4.6,3.2-7.7C382.3,470.5,381.2,468,379.1,465.9z M375.8,478.4
					c-1.2,1.4-2.7,2-4.4,2c-1.7,0-3.2-0.7-4.4-2s-1.8-2.8-1.8-4.7c0-1.8,0.6-3.4,1.8-4.7c1.2-1.3,2.7-2,4.4-2s3.2,0.7,4.4,2
					c1.2,1.3,1.8,2.8,1.8,4.7C377.6,475.5,377,477.1,375.8,478.4z"/>
				<polygon class="st2" points="410.3,463.4 414.9,463.4 414.9,484.2 410.3,484.2 400.4,471.2 400.4,484.2 395.8,484.2 395.8,463.4 
					400.1,463.4 410.3,476.8 	"/>
				<polygon class="st2" points="438.4,467.4 438.4,484.2 433.8,484.2 433.8,467.4 427.9,467.4 427.9,463.4 444.3,463.4 444.3,467.4 	
					"/>
				<rect x="455.1" y="473.2" class="st2" width="10.6" height="4"/>
				<polygon class="st2" points="494.8,463.4 494.8,467.5 484.4,467.5 484.4,471.8 493.7,471.8 493.7,475.8 484.4,475.8 484.4,480.1 
					495.1,480.1 495.1,484.2 479.8,484.2 479.8,463.4 494.8,463.4 	"/>
				<polygon class="st2" points="523.3,463.4 527.9,463.4 527.9,484.2 523.3,484.2 513.4,471.2 513.4,484.2 508.8,484.2 508.8,463.4 
					513.1,463.4 523.3,476.8 	"/>
				<path class="st2" d="M558.5,466.1L558.5,466.1c-2-1.8-4.8-2.7-8.5-2.7h-7.4v20.8h7.1c4,0,7-0.9,8.9-2.8c1.9-1.9,2.9-4.5,2.9-7.7
					C561.5,470.4,560.5,467.9,558.5,466.1z M555.1,478.5L555.1,478.5L555.1,478.5c-1.1,1.1-2.8,1.6-5,1.6h-2.9v-12.7h2.6
					c2.4,0,4.2,0.6,5.3,1.7c1.1,1.1,1.7,2.7,1.7,4.7C556.8,475.9,556.2,477.4,555.1,478.5L555.1,478.5z"/>
				<path class="st2" d="M608.3,466.1L608.3,466.1c-2-1.8-4.8-2.7-8.5-2.7h-7.4v20.8h7.1c4,0,7-0.9,8.9-2.8c1.9-1.9,2.9-4.5,2.9-7.7
					C611.3,470.4,610.3,467.9,608.3,466.1z M604.9,478.5L604.9,478.5L604.9,478.5c-1.1,1.1-2.8,1.6-5,1.6H597v-12.7h2.6
					c2.4,0,4.2,0.6,5.3,1.7c1.1,1.1,1.7,2.7,1.7,4.7C606.6,475.9,606,477.4,604.9,478.5L604.9,478.5z"/>
				<polygon class="st2" points="639.9,463.4 639.9,467.5 629.5,467.5 629.5,471.8 638.8,471.8 638.8,475.8 629.5,475.8 629.5,480.1 
					640.2,480.1 640.2,484.2 624.9,484.2 624.9,463.4 	"/>
				<polygon class="st2" points="661.5,476.7 666.8,463.5 671.8,463.5 663.4,484.3 659.5,484.3 651.1,463.5 656.1,463.5 661.5,476.7 	
					"/>
				<polygon class="st2" points="698.9,463.4 698.9,467.5 688.5,467.5 688.5,471.8 697.8,471.8 697.8,475.8 688.5,475.8 688.5,480.1 
					699.2,480.1 699.2,484.2 683.9,484.2 683.9,463.4 	"/>
				<polygon class="st2" points="712.9,484.2 712.9,463.4 717.5,463.4 717.5,480.1 726.4,480.1 726.4,484.2 712.9,484.2 	"/>
				<path class="st2" d="M756.2,465.9c-2.1-2.1-4.7-3.1-7.8-3.1s-5.7,1-7.8,3.1c-2.1,2.1-3.2,4.6-3.2,7.7c0,3.1,1.1,5.6,3.2,7.7
					c2.1,2.1,4.7,3.1,7.8,3.1s5.7-1,7.8-3.1c2.1-2,3.2-4.6,3.2-7.7C759.4,470.5,758.3,468,756.2,465.9z M752.9,478.4
					c-1.2,1.4-2.7,2-4.4,2s-3.2-0.7-4.4-2s-1.8-2.8-1.8-4.7c0-1.8,0.6-3.4,1.8-4.7s2.7-2,4.4-2s3.2,0.7,4.4,2c1.2,1.3,1.8,2.8,1.8,4.7
					C754.7,475.5,754.1,477.1,752.9,478.4z"/>
				<path class="st2" d="M787.2,465.3L787.2,465.3c-1.5-1.3-3.8-1.9-6.9-1.9h-7.4v20.8h4.6v-5.8h2.8c3.1,0,5.4-0.6,6.9-1.8
					c1.4-1.1,2.2-3,2.2-5.6C789.4,468.4,788.7,466.5,787.2,465.3z M783.8,473.5L783.8,473.5c-0.6,0.6-1.6,0.9-3.3,0.9h-3.1v-7h2.7
					c1.5,0,2.7,0.3,3.4,0.8c0.7,0.5,1.1,1.4,1.1,2.6S784.4,472.9,783.8,473.5z"/>
				<polygon class="st2" points="817.5,463.4 817.5,467.5 807.1,467.5 807.1,471.8 816.4,471.8 816.4,475.8 807.1,475.8 807.1,480.1 
					817.8,480.1 817.8,484.2 802.5,484.2 802.5,463.4 	"/>
				<path class="st2" d="M844.4,476.8c2.7-1,4-3.2,4-6.5h0c0-2.4-0.6-4.2-2-5.3c-1.4-1.1-3.7-1.6-6.9-1.6h-7.9v20.8h4.6v-6.6h3.2
					l4.6,6.6h5.7L844.4,476.8z M842.8,472.8c-0.6,0.5-1.6,0.8-3.2,0.8h-3.4v-6.2h3.5c1.5,0,2.5,0.2,3.1,0.6c0.6,0.4,0.9,1.2,0.9,2.3
					C843.7,471.5,843.4,472.3,842.8,472.8L842.8,472.8z"/>
			</g>
			<path id="and" class="st3" d="M897.7,482.2l-2.9-2.9c0.7-1.1,1.2-2.2,1.7-3.5l-3.5-2.5c-0.2,1-0.6,2-1.1,2.9c-0.6-0.6-1.4-1.6-2.5-3
				c2.9-1.6,4.3-3.5,4.3-5.4c0-1.5-0.6-2.7-1.8-3.6c-1.2-0.9-2.7-1.3-4.3-1.3s-3.1,0.4-4.3,1.3c-1.2,0.9-1.8,2.2-1.8,3.9
				c0,0.8,0.1,1.5,0.4,2.1c0.3,0.6,0.7,1.3,1.4,2.1c-2.9,1.7-4.4,3.6-4.4,5.8c0,1.9,0.7,3.5,2.1,4.6c1.4,1.1,3.2,1.7,5.4,1.7
				s4.1-0.6,5.8-2l2.6,2.6L897.7,482.2z M886.4,480.7c-0.9,0-1.6-0.2-2.2-0.7h0c-0.5-0.4-0.8-1-1-1.7c0-1.1,0.8-2.1,2.3-3.1
				c1.1,1.3,2.4,2.7,3.8,4.2C888.3,480.3,887.3,480.7,886.4,480.7z M887.1,470.5c-0.8-1-1.2-1.8-1.2-2.3c0-0.6,0.2-1,0.5-1.3
				c0.4-0.3,0.8-0.5,1.2-0.5s0.8,0.2,1.2,0.6c0.3,0.3,0.5,0.7,0.5,1.3C889.3,469,888.6,469.7,887.1,470.5z"/>
			<g id="designer">
				<path class="st3" d="M943.8,466.1L943.8,466.1c-2-1.8-4.9-2.7-8.5-2.7h-7.4v20.8h7.1c4,0,7-0.9,8.9-2.8c1.9-1.9,2.9-4.5,2.9-7.7
					C946.8,470.4,945.8,467.9,943.8,466.1z M940.3,478.5L940.3,478.5L940.3,478.5c-1.1,1.1-2.7,1.6-5,1.6h-2.9v-12.7h2.6
					c2.4,0,4.2,0.6,5.3,1.7c1.1,1.1,1.7,2.7,1.7,4.7C942,475.9,941.4,477.4,940.3,478.5L940.3,478.5z"/>
				<polygon class="st3" points="975.3,463.4 975.3,467.5 964.9,467.5 964.9,471.8 974.2,471.8 974.2,475.8 964.9,475.8 964.9,480.1 
					975.6,480.1 975.6,484.2 960.3,484.2 960.3,463.4 	"/>
				<path class="st3" d="M994.1,467.6c-0.4,0.4-0.7,0.9-0.7,1.5s0.3,1.1,0.8,1.4c0.5,0.4,1.8,0.8,3.8,1.3s3.5,1.2,4.6,2.2
					s1.6,2.4,1.6,4.3s-0.7,3.4-2.1,4.5c-1.4,1.2-3.2,1.7-5.5,1.7c-3.3,0-6.3-1.2-8.9-3.7l2.8-3.4c2.2,2,4.3,2.9,6.2,2.9
					c0.9,0,1.5-0.2,2-0.6s0.7-0.9,0.7-1.5s-0.3-1.1-0.8-1.5s-1.5-0.7-3.1-1.1c-2.4-0.6-4.2-1.3-5.3-2.2c-1.1-0.9-1.7-2.4-1.7-4.3
					s0.7-3.5,2.1-4.6c1.4-1.1,3.2-1.6,5.3-1.6c1.4,0,2.8,0.2,4.2,0.7s2.6,1.2,3.6,2l-2.4,3.4c-1.8-1.4-3.7-2.1-5.6-2.1
					C995.2,467,994.6,467.2,994.1,467.6L994.1,467.6z"/>
				<rect x="1017.8" y="463.4" class="st3" width="4.6" height="20.8"/>
				<path class="st3" d="M1050.6,473.6h4.7v7.4c-2.1,2.3-4.9,3.5-8.6,3.5c-3.1,0-5.6-1-7.7-3s-3.1-4.6-3.1-7.7s1.1-5.7,3.2-7.7
					c2.1-2.1,4.7-3.1,7.7-3.1s5.6,1,7.8,2.9l-2.4,3.5c-0.9-0.8-1.8-1.4-2.6-1.7c-0.8-0.3-1.6-0.5-2.5-0.5c-1.8,0-3.3,0.6-4.5,1.8
					c-1.2,1.2-1.8,2.8-1.8,4.7c0,2,0.6,3.5,1.7,4.7c1.2,1.2,2.5,1.8,4.2,1.8s2.9-0.3,4-0.9L1050.6,473.6L1050.6,473.6z"/>
				<polygon class="st3" points="1083.5,463.4 1088.1,463.4 1088.1,484.2 1083.5,484.2 1073.6,471.2 1073.6,484.2 1069,484.2 
					1069,463.4 1073.3,463.4 1083.5,476.8 	"/>
				<polygon class="st3" points="1117.8,463.4 1117.8,467.5 1107.4,467.5 1107.4,471.8 1116.7,471.8 1116.7,475.8 1107.4,475.8 
					1107.4,480.1 1118.1,480.1 1118.1,484.2 1102.8,484.2 1102.8,463.4 1117.8,463.4 	"/>
				<path class="st3" d="M1144.7,476.8c2.7-1,4-3.2,4-6.5h0c0-2.4-0.6-4.2-2-5.3c-1.4-1.1-3.7-1.6-6.9-1.6h-7.9v20.8h4.6v-6.6h3.2
					l4.6,6.6h5.7L1144.7,476.8z M1143.1,472.8c-0.6,0.5-1.7,0.8-3.2,0.8h-3.4v-6.2h3.5c1.5,0,2.5,0.2,3.1,0.6c0.6,0.4,0.9,1.2,0.9,2.3
					C1144,471.5,1143.7,472.3,1143.1,472.8z"/>
			</g>
			<g id="name">
				<polygon class="st3" points="1.2,386.1 1.2,334.1 12.8,334.1 12.8,375.8 35,375.8 35,386.1 	"/>
				<path class="st3" d="M82.9,372.7c1.9,2.4,4.5,3.6,7.8,3.6s5.9-1.2,7.8-3.6s2.9-5.7,2.9-9.9v-28.7H113v29.1c0,7.5-2.1,13.3-6.3,17.4
					c-4.2,4-9.5,6.1-16,6.1s-11.8-2-16-6.1s-6.3-9.8-6.3-17.3v-29.1H80v28.7C80,367,81,370.3,82.9,372.7z"/>
				<path class="st3" d="M151.9,334.1h11.6v21.4l19.7-21.4h14.4l-20.7,23c1.8,2.5,5.1,7.1,9.9,13.9c4.8,6.8,8.4,11.8,10.8,15.1h-13.5
					l-15.3-20.5l-5.2,5.8v14.7H152v-52H151.9z"/>
				<polygon class="st3" points="269,334.1 269,344.4 243.1,344.4 243.1,355.1 266.4,355.1 266.4,365 243.1,365 243.1,375.8 
					269.8,375.8 269.8,386.1 231.5,386.1 231.5,334.1 269,334.1 	"/>
				<path class="st3" d="M393.2,340.9c-5-4.5-12.1-6.8-21.4-6.8h-18.4v52h17.8c9.9,0,17.3-2.4,22.1-7.1c4.9-4.7,7.3-11.1,7.3-19.2
					C400.6,351.8,398.2,345.4,393.2,340.9z M384.7,371.8c-2.9,2.7-7,4.1-12.3,4H365v-31.6h6.6c5.9,0,10.2,1.3,13.1,4.1
					c2.9,2.8,4.3,6.7,4.3,11.8C389,365.2,387.6,369.1,384.7,371.8z"/>
				<rect x="437.5" y="334.1" class="st3" width="11.6" height="52"/>
				<path class="st3" d="M515.6,334.1h-11.2l-22.5,52h12.4l4.8-11.2h21.8l4.8,11.2h12.4L515.6,334.1z M503.4,364.7l6.6-15.1h0l6.4,15.1
					H503.4z"/>
				<polygon class="st3" points="617.5,353.4 603.4,381.8 596.5,381.8 582.5,353.4 582.5,386.2 570.9,386.2 570.9,334.2 586.6,334.2 
					600,362.8 613.5,334.2 629.1,334.2 629.1,386.2 617.5,386.2 617.5,353.4 	"/>
				<path class="st3" d="M695.7,334.1h-11.2l-22.5,52h12.4l4.8-11.2H701l4.8,11.2h12.4L695.7,334.1z M683.5,364.7l6.6-15.1l6.4,15.1
					H683.5z"/>
				<polygon class="st3" points="787.4,334.1 799,334.1 799,386.1 787.4,386.1 762.6,353.5 762.6,386.1 751,386.1 751,334.1 
					761.9,334.1 787.4,367.6 	"/>
				<polygon class="st3" points="860.6,344.2 860.6,386.2 849,386.2 849,344.2 834.3,344.2 834.3,334.2 875.4,334.2 875.4,344.2 	"/>
				<path class="st3" d="M953,340.6c-5.2-5.1-11.7-7.7-19.4-7.7s-14.1,2.6-19.4,7.7c-5.3,5.2-7.9,11.6-7.9,19.2
					c0,7.7,2.6,14.1,7.9,19.2c5.2,5.1,11.7,7.7,19.4,7.7s14.1-2.6,19.4-7.7c5.2-5.2,7.9-11.6,7.9-19.2
					C960.9,352.1,958.3,345.7,953,340.6z M944.5,371.6c-3,3.3-6.6,4.9-11,4.9s-8-1.6-11-4.9c-3-3.2-4.5-7.2-4.5-11.8
					c0-4.7,1.5-8.6,4.5-11.9s6.6-4.9,11-4.9s8,1.6,11,4.9s4.5,7.3,4.5,11.9C949,364.5,947.6,368.4,944.5,371.6z"/>
				<path class="st3" d="M1033.3,338.8c-3.6-3.1-9.4-4.7-17.4-4.6h-18.4v52h11.6v-14.5h6.9c7.7,0,13.5-1.5,17.2-4.5s5.6-7.7,5.6-14.1
					C1038.8,346.7,1036.9,341.9,1033.3,338.8z M1024.8,359.2L1024.8,359.2c-1.4,1.6-4,2.4-7.8,2.4h-7.8v-17.5h6.6
					c3.8,0,6.6,0.6,8.4,1.9c1.8,1.3,2.7,3.4,2.7,6.4S1026.2,357.6,1024.8,359.2z"/>
				<path class="st3" d="M1118.5,340.6c-5.2-5.1-11.7-7.7-19.4-7.7c-7.7,0-14.1,2.6-19.4,7.7c-5.3,5.2-7.9,11.6-7.9,19.2
					c0,7.7,2.6,14.1,7.9,19.2c5.2,5.1,11.7,7.7,19.4,7.7c7.7,0,14.1-2.6,19.4-7.7c5.2-5.2,7.8-11.6,7.9-19.2
					C1126.4,352.1,1123.8,345.7,1118.5,340.6z M1110,371.6c-3,3.3-6.7,4.9-11,4.9c-4.4,0-8-1.6-11-4.9c-3-3.2-4.5-7.2-4.5-11.8
					c0-4.7,1.5-8.6,4.5-11.9s6.7-4.9,11-4.9c4.4,0,8,1.6,11,4.9s4.5,7.3,4.5,11.9C1114.5,364.5,1113,368.4,1110,371.6z"/>
				<path class="st3" d="M1176.7,372.7c1.9,2.4,4.5,3.6,7.8,3.6s5.9-1.2,7.8-3.6s2.9-5.7,2.9-9.9v-28.7h11.6v29.1
					c0,7.5-2.1,13.3-6.3,17.4c-4.2,4-9.5,6.1-16,6.1s-11.8-2-16-6.1s-6.3-9.8-6.3-17.3v-29.1h11.6v28.7
					C1173.8,367,1174.8,370.3,1176.7,372.7z"/>
				<polygon class="st3" points="1245.7,386.1 1245.7,334.1 1257.3,334.1 1257.3,375.8 1279.5,375.8 1279.5,386.1 1245.7,386.1 	"/>
				<path class="st3" d="M1357.1,340.6c-5.2-5.1-11.7-7.7-19.4-7.7c-7.7,0-14.1,2.6-19.4,7.7c-5.3,5.2-7.9,11.6-7.9,19.2
					c0,7.7,2.6,14.1,7.9,19.2c5.2,5.1,11.7,7.7,19.4,7.7c7.7,0,14.1-2.6,19.4-7.7c5.2-5.2,7.9-11.6,7.9-19.2
					C1365,352.1,1362.4,345.7,1357.1,340.6z M1348.6,371.6c-3,3.3-6.7,4.9-11,4.9c-4.4,0-8-1.6-11-4.9c-3-3.2-4.5-7.2-4.5-11.8
					c0-4.7,1.5-8.6,4.5-11.9s6.7-4.9,11-4.9c4.4,0,8,1.6,11,4.9s4.5,7.3,4.5,11.9C1353.1,364.5,1351.7,368.4,1348.6,371.6z"/>
				<path class="st3" d="M1413.3,344.5c-1.1,0.9-1.7,2.1-1.7,3.6s0.7,2.7,2,3.6c1.4,0.9,4.5,1.9,9.5,3.2c4.9,1.2,8.8,3,11.5,5.5
					c2.7,2.4,4.1,6,4.1,10.6c0,4.7-1.7,8.4-5.2,11.4c-3.5,2.9-8.1,4.4-13.8,4.4c-8.2,0-15.7-3.1-22.3-9.2l6.9-8.5
					c5.6,4.9,10.8,7.4,15.6,7.4c2.1,0,3.8-0.5,5-1.4s1.8-2.2,1.8-3.7c0-1.6-0.6-2.8-1.9-3.7c-1.3-0.9-3.8-1.8-7.7-2.8
					c-6.1-1.4-10.5-3.3-13.3-5.6c-2.8-2.3-4.2-5.9-4.2-10.9c0-4.9,1.8-8.7,5.3-11.4c3.5-2.7,8-4,13.3-4c3.5,0,6.9,0.6,10.4,1.8
					c3.5,1.2,6.5,2.9,9.1,5.1l-5.9,8.5c-4.5-3.4-9.2-5.1-14-5.1C1416,343.1,1414.4,343.6,1413.3,344.5L1413.3,344.5z"/>
			</g>
		</svg>

	</section>

	<!--  Navigation to stick  -->
	<nav class="navigation navigation--sticky">
		<a href="index.php">
			<svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 350" ><path d="M0 0l175.43 303.86L350.86 0zm27.7 16h63.25l84.48 146.33L259.91 16h63.26L175.43 271.88zm213.38.65l-65.65 113.7-65.64-113.71z" fill="#fff" data-name="Layer 1"/>
			</svg>
		</a>
	</nav> 

	<!-- Services section -->
	<section class="section__services flex-middle">
		<div class="container">
			<!-- Start section -->
			<div class="row">
				<div class="col col-3">
					<h4 class="heading--secondary">Motion Design</h4>
					<p class="copy">Interaction and animation are my forte. In the last year I've taken a deep dive into <span class="highlight">GSAP</span> while utilizing it for UI element animation and digital adverts. Currently in my spare time I am discovering the wonderful world of <span class="highlight">canvas</span> &amp; <span class="highlight">WebGL</span> with THREE.js!
				</div>
				<div class="col col-3 align-right">
					<h2 class="heading--main bigly">A Big<br>Fan<br>of.</h2>
				</div>
				<div class="col col-3">
					<h4 class="heading--secondary">Web Development</h4>
					<p class="copy">Passionate about user experience and the <span class="highlight">narrative</span> one encounters through a website, I stride to create a seamless and <span class="highlight">effortless experiences</span> for the user.</p>
				</div>
				<div class="col col-3">
					<h4 class="heading--secondary">UI Design</h4>
					<p class="copy"><span class="highlight">UI design</span> feels like playground I could spend days in. Its in the UI where meaningful <span class="highlight">visual relationships</span> are made by the user, ensuring a smooth and positive experience through ones site.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Works section -->
	<section class="section__works">
		<div class="row">
			<div class="col col-4 works__head__title">
				<h2 class="heading--giant">
					The<br>Works
				</h2>
			</div>
			<div class="col col-4">
				<a href="work-husky-motors.php">
					<img class="duotoned--black" src="assets/thumb-husky.jpg" alt="">
					<h3 class="heading--subTitle">Design + Development</h3>
					<h2 class="heading--title">
						Husky<br>Motors
					</h2>
				</a>
			</div>
			<div class="col col-4">
				<a href="work-kubota.php">
					<img class="duotoned--black" src="assets/thumb-kubota.jpg" alt="">
					<h3 class="heading--subTitle">Design</h3>
					<h2 class="heading--title">
						Kubota
					</h2>
				</a>
			</div>
			<div class="col col-4">
				<a href="work-trumpemIpsum.php">
					<img class="duotoned--black" src="assets/thumb-trump.jpg" alt="">
					<h3 class="heading--subTitle">Design + Development</h3>
					<h2 class="heading--title">
						Trumpem<br>Ipsum
					</h2>
				</a>
			</div>
			<div class="col col-4">
				<a href="work-roots.php">
					<img class="duotoned--black" src="assets/thumb-roots.jpg" alt="">
					<h3 class="heading--subTitle">Design + Development</h3>
					<h2 class="heading--title">
						Roots<br>Canada
					</h2>
				</a>
			</div>
			<div class="col col-4">
				<img class="duotoned--black" src="assets/thumb-coulson.jpg" alt="">
				<a href="work-coulson-landscaping.php">
					<h3 class="heading--subTitle">Design + Development</h3>
					<h2 class="heading--title">
						Coulson <br>Landscaping
					</h2>
				</a>
			</div>
		</div>
	</section>

	<footer>
		<div class="container">
			<!-- Start section -->
			<div class="row">
				<div class="col">
					<ul class="social">
						<l1 class="social__icon social__icon__dribbble">
							<a class="social__icon__link" href="https://dribbble.com/lukeDiamantopoulos" target="_blank">
								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 1000 1000"><path d="M0 500c0-90.667 22.334-174.333 67-251 44.667-76.667 105.334-137.333 182-182C325.667 22.333 409.334 0 500 0c90.667 0 174.334 22.333 251 67 76.667 44.667 137.334 105.333 182 182 44.667 76.667 67 160.333 67 251s-22.333 174.333-67 251c-44.666 76.667-105.333 137.333-182 182-76.666 44.667-160.333 67-251 67-90.666 0-174.333-22.333-251-67-76.666-44.667-137.333-105.333-182-182C22.334 674.333 0 590.667 0 500zm83 0c0 104 35 195.667 105 275 32-62.667 82.667-122.333 152-179 69.334-56.667 137-92.333 203-107-10-23.333-19.666-44.333-29-63-114.666 36.667-238.666 55-372 55-26 0-45.333-.333-58-1 0 2.667-.166 6-.5 10-.333 4-.5 7.333-.5 10zm13-103c14.667 1.333 36.334 2 65 2 111.334 0 217-15 317-45-50.666-90-106.333-165-167-225-52.666 26.667-97.833 63.667-135.5 111-37.666 47.333-64.166 99.667-79.5 157zm149 432c75.334 58.667 160.334 88 255 88 49.334 0 98.334-9.333 147-28-13.333-114-39.333-224.333-78-331-61.333 13.333-123.166 47-185.5 101C321.167 713 275 769.667 245 829zM398 97c58.667 60.667 113 136.333 163 227 90.667-38 159-86.333 205-145-77.333-64-166-96-266-96-34 0-68 4.667-102 14zm199 298c10 21.333 21.334 48.333 34 81 49.334-4.667 103-7 161-7 41.334 0 82.334 1 123 3-5.333-90.667-38-171.333-98-242-43.333 64.667-116.666 119.667-220 165zm59 151c34 98.667 57 200 69 304 52.667-34 95.667-77.667 129-131 33.334-53.333 53.334-111 60-173-48.666-3.333-93-5-133-5-36.666 0-78.333 1.667-125 5z"/>
								</svg>
							</a>
						</l1>
						<l1 class="social__icon social__icon__codepen">
							<a class="social__icon__link" href="https://codepen.io/LukeDiamantopoulos/" target="_blank">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="20 0 25 26" fill="none" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round">
								  <path d="M80 6h-9v14h9 M114 6h-9 v14h9 M111 13h-6 M77 13h-6 M122 20V6l11 14V6 M22 16.7L33 24l11-7.3V9.3L33 2L22 9.3V16.7z M44 16.7L33 9.3l-11 7.4 M22 9.3l11 7.3 l11-7.3 M33 2v7.3 M33 16.7V24 M88 14h6c2.2 0 4-1.8 4-4s-1.8-4-4-4h-6v14 M15 8c-1.3-1.3-3-2-5-2c-4 0-7 3-7 7s3 7 7 7 c2 0 3.7-0.8 5-2 M64 13c0 4-3 7-7 7h-5V6h5C61 6 64 9 64 13z"/>
								</svg>
							</a>
						</l1>
						<l1 class="social__icon social__icon__instagram">
							<a class="social__icon__link" href="https://www.instagram.com/lukediamantopoulos/?hl=en" target="_blank">
								<svg data-name="Logo" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 500 500"><path d="M251.92 45.39c67.27 0 75.23.26 101.8 1.47 24.56 1.12 37.9 5.22 46.78 8.67a78.05 78.05 0 0 1 29 18.84 78.05 78.05 0 0 1 18.84 29c3.45 8.88 7.55 22.22 8.67 46.78 1.21 26.56 1.47 34.53 1.47 101.8s-.26 75.23-1.47 101.8c-1.12 24.56-5.22 37.9-8.67 46.78a83.43 83.43 0 0 1-47.81 47.81c-8.88 3.45-22.22 7.55-46.78 8.67-26.56 1.21-34.53 1.47-101.8 1.47s-75.24-.26-101.8-1.47c-24.56-1.12-37.9-5.22-46.78-8.67a78.05 78.05 0 0 1-29-18.84 78.05 78.05 0 0 1-18.84-29c-3.45-8.88-7.55-22.22-8.67-46.78-1.21-26.56-1.47-34.53-1.47-101.8s.26-75.23 1.47-101.8c1.12-24.56 5.22-37.9 8.67-46.78a78.05 78.05 0 0 1 18.84-29 78.05 78.05 0 0 1 29-18.84c8.88-3.45 22.22-7.55 46.78-8.67 26.56-1.21 34.53-1.47 101.8-1.47m0-45.39c-68.42 0-77 .29-103.87 1.52S102.92 7 86.92 13.22a123.49 123.49 0 0 0-44.64 29.06 123.49 123.49 0 0 0-29.06 44.64c-6.22 16-10.48 34.32-11.7 61.13S0 183.5 0 251.92s.29 77 1.52 103.87 5.48 45.13 11.7 61.13a123.49 123.49 0 0 0 29.06 44.62 123.49 123.49 0 0 0 44.64 29.07c16 6.23 34.34 10.49 61.15 11.71s35.45 1.52 103.87 1.52 77-.29 103.87-1.52 45.11-5.48 61.11-11.71a128.82 128.82 0 0 0 73.69-73.69c6.23-16 10.49-34.34 11.71-61.15s1.52-35.45 1.52-103.87-.29-77-1.52-103.87-5.48-45.11-11.71-61.11a123.49 123.49 0 0 0-29.06-44.62 123.49 123.49 0 0 0-44.63-29.08c-16-6.22-34.32-10.48-61.13-11.7S320.34 0 251.92 0z"/><path d="M251.92 122.56a129.36 129.36 0 1 0 129.36 129.36 129.36 129.36 0 0 0-129.36-129.36zm0 213.36a84 84 0 1 1 84-84 84 84 0 0 1-84 84z"/><circle cx="386.4" cy="117.44" r="30.23"/></svg>
							</a>
						</l1>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<h2 class="heading--giant">We'd look good<br>together</h2>
					<div class="copy">Feel free to get in touch at <a class="link__email" href="mailto:diamantopoulos.luke@gmail.com?Subject=Hello%20there">diamantopoulos.luke@gmail.com</a></div>
				</div>
			</div>
		</div>
	</footer>
</body>

<?php include 'footer.php'; ?>
