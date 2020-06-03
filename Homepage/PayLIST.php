		<style>
			input::placeholder {color:#EAEAEA}
			input::-webkit-input-placeholder {color:#EAEAEA}
			input:-ms-input-placeholder {color:#EAEAEA}
			#order_header {width:100%;height:60px;padding:15px 20px;font-size:20px;color:#fff;border-bottom:#FE6C93 3px solid;background:#2b3a44}
			#order_contents {width:100%;height:calc(100% - 60px);padding:20px 10px}
			.tabs {width:100%;height:40px;}
			.tabs li {float:left;width:50%;height:40px;line-height:40px;background:#F6F6F6;border-radius:6px 6px 0 0;border:1px solid #fff;text-align:center}
			
			ul.tabs li a {display: block;text-decoration:none;color: #353535;font-size: 15px}
			ul.tabs li.active{background: #FE6C93;border: 1px solid #FE6C93}
			.tab_container {clear:both;float:left;width:100%;height:150px;background: #fff;border:1px solid #FE6C93;border-bottom:none;overflow:hidden}
			.tab_content {padding:20px 10px;font-size:13px}
			.order_view {clear:both;float:left;width:100%;height:calc(100% - 190px);padding:20px 10px;border:1px solid #FE6C93;border-top:1px dashed #FE6C93}
			.table_00 {width:100%;border-collapse:collapse;border:#FFD8D8 1px solid}
			.table_00 .tr_top {background:#FFD9EC}
			.table_00 td {width:20%;height:40px;border:#FFD8D8 1px solid;font-size:12px;text-align:center}
			.table_00 .inputbox {width:100%;height:100%;padding:5px;text-align:center;font-size:12px;border:none}
			.table_00 .tr_top_02 {height:40px;background:#E8D9FF}
			.table_00 .tr_ {height:80px}
			.table_00 .tr_ td {font-size:11px;text-align:center}
			
		</style>
		
		
		<header id="order_header">
			결제 / 사용내역 조회
			<div id="pop_close" style="float:right;cursor:hand">X</div>
		</header>
		
		<div id="order_contents">
			<ul class="tabs">
				<li>
					<a href="#tab_01">승인번호로 확인</a>
				</li>
				<li>
					<a href="#tab_02">카드번호로 확인</a>
				</li>
			</ul>
			
			<div class="tab_container">
				<div id="tab_01" class="tab_content">
					<p style="height:30px;font-size:11px">신용카드 명세서상 가맹점명이 <b style="color:#24A6BD">주식회사 모두페이</b>로 표기된 경우 사용내역을 확인 하실 수 있습니다.</p>
					<table cellpadding="0" cellspacing="0" class="table_00">
						<tr class="tr_top">
							<td>이용일</td>
							<td>이용시간</td>
							<td>승인번호</td>
							<td>금액</td>
							<td style="width:60px" rowspan="2"><button style="width:100%;height:100%;background:#FE6C93;border:none">조회</button></td>
						</tr>
						<tr>
							<td>
								<input id="use_date" class="inputbox" placeholder="8자리:숫자만입력" onkeyup="auto_date_format(event, this)" onkeypress="auto_date_format(event, this)" maxlength="10">
							</td>
							<td>
								<select id="use_time" class="inputbox">
									<option value="00">00</option>
									<option value="01">01</option>
									<option value="02">02</option>
									<option value="03">03</option>
									<option value="04">04</option>
									<option value="05">05</option>
									<option value="06">06</option>
									<option value="07">07</option>
									<option value="08">08</option>
									<option value="09">09</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
								</select>
							</td>
							<td>
								<input id="pay_number" class="inputbox">
							</td>
							<td>
								<input id="pay_money" class="inputbox" placeholder="숫자만 입력" onKeyup="inputNumberAutoComma(this);">
							</td>
						</tr>
					</table>
				</div>

				<div id="tab_02" class="tab_content">
				   <p style="height:30px;font-size:11px">신용카드 명세서상 가맹점명이 <b style="color:#24A6BD">주식회사 모두페이</b>로 표기된 경우 사용내역을 확인 하실 수 있습니다.</p>
					<table cellpadding="0" cellspacing="0" class="table_00">
						<tr class="tr_top">
							<td style="width:150px">이용일</td>
							<td style="width:90px">이용시간</td>
							<td style="width:calc(100% - 400px)">카드번호</td>
							<td style="width:100px">금액</td>
							<td style="width:60px;background:#FE6C93" rowspan="2">조회</td>
						</tr>
						<tr>
							<td style="width:150px">
								<input id="use_date" class="inputbox" placeholder="8자리:숫자만입력" onkeyup="auto_date_format(event, this)" onkeypress="auto_date_format(event, this)" maxlength="10">
							</td>
							<td style="width:90px">
								<select id="use_time" class="inputbox">
									<option value="00">00</option>
									<option value="01">01</option>
									<option value="02">02</option>
									<option value="03">03</option>
									<option value="04">04</option>
									<option value="05">05</option>
									<option value="06">06</option>
									<option value="07">07</option>
									<option value="08">08</option>
									<option value="09">09</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
								</select>
							</td>
							<td style="width:calc(100% - 320px)">
								<input id="pay_card" placeholder="0000-0000-0000-0000 형식입력" class="inputbox">
							</td>
							<td style="width:100px">
								<input id="pay_money" class="inputbox" placeholder="숫자만 입력" onKeyup="inputNumberAutoComma(this);">
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="order_view">
				<table cellpadding="0" cellspacing="0" class="table_00">
					<tr class="tr_top_02">
						<td style="width:85px">거래일시</td>
						<td style="width:130px">가맹점명</td>
						<td style="width:80px">이용금액</td>
						<td style="width:calc(100% - 440px)">주소</td>
						<td style="width:90px">연락처</td>
						<td style="width:60px">영수증</td>
					</tr>
					<tr class="tr_">
						<td style="width:85px">2020-08-31 16:22:33</td>
						<td style="width:130px">엘세븐헤어 (성신여대)</td>
						<td style="width:80px">9,999,999</td>
						<td style="width:calc(100% - 440px)">인천광역시 연수구 송도동 190-4 더샵센트럴시티 213-1204</td>
						<td style="width:90px">032-508-9970</td>
						<td style="width:60px"><button style="width:100%;height:100%;background:#FE6C93;border:none">영수증</button></td>
					</tr>
				</table>
			</div>
		</div>
			
			
		<script type="text/javascript">
			$(document).ready(function() {
				$('.tab_content').hide(); //Hide all content
				$('ul.tabs li:first').addClass('active').show(); //Activate first tab
				$('.tab_content:first').show(); //Show first tab content

				//On Click Event
				$('ul.tabs li').click(function() {

					$('ul.tabs li').removeClass('active'); //Remove any "active" class
					$(this).addClass('active'); //Add "active" class to selected tab
					$('.tab_content').hide(); //Hide all tab content

					var activeTab = $(this).find('a').attr('href'); //Find the href attribute value to identify the active tab + content
					$(activeTab).fadeIn(); //Fade in the active ID content
					return false;
				});

			});
			
			$('#pop_close').click(function() {
			//	$('html, body').css({'overflow': 'auto', 'height': '100%'}); //scroll hidden 해제 
				$('body').off('scroll touchmove mousewheel'); // 터치무브 및 마우스휠 스크롤 가능
				$("div").remove("#DIM, #PopupWIN");
				
			});	
			
			// 날짜형식변환
			function auto_date_format( e, oThis ){
				var num_arr = [ 97, 98, 99, 100, 101, 102, 103, 104, 105, 96, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57 ]
				var key_code = ( e.which ) ? e.which : e.keyCode;
				if( num_arr.indexOf( Number( key_code ) ) != -1 ){
					var len = oThis.value.length;
					if( len == 4 ) oThis.value += "-";
					if( len == 7 ) oThis.value += "-";
				}
			}
			
			/* 숫자만 입력 , 콤마삽입 */
			function inputNumberAutoComma(obj) {
				var deleteComma = obj.value.replace(/\,/g, "");
				if(isFinite(deleteComma) == false) {
					alert("문자는 입력하실 수 없습니다.");
					obj.value = "";
					return false;
				}
				obj.value = inputNumberWithComma(inputNumberRemoveComma(obj.value));
			}
		   
			function inputNumberWithComma(str) {
				str = String(str);
				return str.replace(/(\d)(?=(?:\d{3})+(?!\d))/g, "$1,");
			}

			function inputNumberRemoveComma(str) {
				str = String(str);
				return str.replace(/[^\d]+/g, "");
			}
		</script>