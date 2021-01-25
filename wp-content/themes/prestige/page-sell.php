<?php
/**
 *Template Name: SELL
 */


get_header(); ?>

	<div id="content" class="site-content">

		<div class="page-header">
			<div class="container">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>
		</div>

        <?php echo onepress_breadcrumb(); ?>

		<div id="content-inside" class="container no-sidebar">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
	<section id="contact">
	<p style="font-size:13px;"><span class="hissu">*</span>は必須項目</p>
	<hr />
<h3>査定する愛車について</h3>
<form id="mailformpro" action="<?php echo home_url(); ?>/form_sell/mailformpro/mailformpro.cgi" method="POST">
<dl>
<dt>車名<span class="hissu">*</span></dt><dd><input type="text" name="車名" size="50" class="carname" required="required"></dd>
<dt>型式</dt><dd><input type="text" name="型式" class="cartype" size="50"></dd>
<dt>年式（初度登録年月）<span class="hissu">*</span></dt><dd><input type="hidden" name="年式" data-unjoin="年式年+年+年式月+月" value=""><input type="text" name="年式年" class="nensiki" required="required" size="6">&nbsp;年&nbsp;&nbsp;<input type="text" name="年式月" class="nensiki" required="required" size="6">&nbsp;月</dd>
<dt>グレード</dt><dd><input type="text" name="グレード" class="grade"></dd>
<dt>車検<span class="hissu">*</span></dt><dd><input type="hidden" name="車検" data-unjoin="車検年+年+車検月+月+車検日+日まで" value=""><input type="text" name="車検年" class="syaken" required="required" size="6">&nbsp;年&nbsp;&nbsp;<input type="text" name="車検月" class="syaken" required="required" size="6">&nbsp;月&nbsp;&nbsp;<input type="text" name="車検日" class="syaken" required="required" size="6">&nbsp;日まで</dd>
<dd><input type="radio" name="エンジン" value="ガソリン" required="required">&nbsp;<label>ガソリン</label>&nbsp;&nbsp;<input type="radio" name="エンジン" value="ディーゼル" required="required">&nbsp;<label>ディーゼル</label></dd>
<dt>シフト<span class="hissu">*</span></dt><dd><input type="radio" name="シフト" value="ＡＴ" required="required">&nbsp;<label>ＡＴ</label>&nbsp;&nbsp;<input type="radio" name="シフト" value="ＭＴ" required="required">&nbsp;<label>ＭＴ</label></dd>
<dt>走行距離<span class="hissu">*</span></dt><dd><input type="text" name="走行距離" class="distance" required="required">&nbsp;km</dd>
<dt>ボディカラー</dt><dd><input type="text" name="ボディカラー" class="color"></dd>
<dt>その他装飾品</dt><dd><textarea name="その他装飾品" rows="4" cols="50"></textarea></dd>
<dt>セールスポイント</dt><dd><textarea name="セールスポイント" rows="4" cols="50"></textarea></dd>
<hr />
<h3>お客様について</h3>
<dt>お名前<span class="hissu">*</span></dt><dd><input type="text" name="お名前" size="50" required="required"></dd>
<dt>ご住所</dt><dd><input type="text" name="ご住所" size="50"></dd>
<dt>TEL</dt><dd><input type="tel" data-type="tel" name="連絡先TEL" size="20" data-min="9"></dd>
<input type="hidden" name="mfp_separator_01" value="\n【メールアドレス】\n">
<dt>Email<span class="hissu">*</span></dt><dd><input type="email" data-type="email" name="email" size="40" required="required"></dd>
<dt>買取希望価格<span class="hissu">*</span></dt><dd><input type="text" name="買取希望価格" class="price" required="required"></dd>
<dt>買取希望時期<span class="hissu">*</span></dt><dd><input type="radio" name="買取希望時期" value="1ヶ月以内" required="required">&nbsp;<label>1ヶ月以内</label>&nbsp;&nbsp;<input type="radio" name="買取希望時期" value="未定" required="required">&nbsp;<label>未定</label></dd>
<input type="hidden" name="mfp_separator_02" value="\n【備考欄】\n">
<dt>備考欄</dt><dd><textarea name="備考欄" rows="4" cols="50"></textarea></dd>
</dl>
<hr />
                        <p class="privacy_box">
                            有限会社プレステージ（以下、「当社」）は、個人情報保護の重要性を踏まえ、業務上取得・利用する全ての個人情報について、以下の取り組みを実施しております。<br />
                            <br />
                            1. 個人情報の取得について<br />
                            当社は、偽りその他不正の手段によらず適正に個人情報を取得致します。<br />
 							<br />                           
                            2. 個人情報の利用について<br />
                            当社は、個人情報をお見積のご依頼・ご相談に対する回答及び資料送付等、利用目的の達成に必要な範囲内で、利用致します。 以下、定めのない目的で個人情報を利用する場合、あらかじめご本人の同意を得た上で行います。<br />
                            <br />
                            3. 個人情報の安全管理について<br />
                            当社は、取り扱う個人情報の漏洩、滅失またはき損の防止その他の個人情報の安全管理のために必要かつ適切な措置を講じます。<br />
                            <br />
                            4. 個人情報の委託について<br />
                            当社は、個人情報の取り扱いの全部または一部を第三者に委託する場合は、当該第三者について厳正な調査を行い、取り扱いを委託された個人情報の安全管理が図られるよう当該第三者に対する必要かつ適切な監督を行います。<br />
                            <br />
                            5. 個人情報の第三者提供について<br />
                            当社は、個人情報保護法等の法令に定めのある場合を除き、個人情報をあらかじめご本人の同意を得ることなく、第三者に提供致しません。<br />
                            <br />
                            6. 個人情報の開示・訂正等について<br />
                            当社は、ご本人から自己の個人情報についての開示の請求がある場合、速やかに開示を致します。その際、ご本人であることが確認できない場合には、開示に応じません。個人情報の内容に誤りがあり、ご本人から訂正・追加・削除の請求がある場合、調査の上、速やかにこれらの請求に対応致します。その際、ご本人であることが確認できない場合、これらの請求に応じません。当社の個人情報の取り扱いにつきまして、上記の請求・お問い合わせ等ございましたらご連絡くださいますようお願い申し上げます。
                            <br />
                            お問い合わせ<br />
                            7. 本方針の変更<br />
                            本方針の内容は変更されることがあります。変更後の本方針については、当社が別途定める場合を除いて、当サイトに掲載した時から効力を生じるものとします。<br />
                        </p>
                        <p>プライバシーポリシーに同意して送信ボタンを押してください</p>
<div class="btn_send"><button type="submit">入力内容を確認する　＞</button></div>
</form>
<script type="text/javascript" src="//prestige-co.com/form_sell/mailformpro/mailformpro.cgi" id="mfpjs"></script>
	</section>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!--#content-inside -->
	</div><!-- #content -->

<?php get_footer(); ?>
