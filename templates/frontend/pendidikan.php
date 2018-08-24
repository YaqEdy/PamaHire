<?php get_template('header');?>
<style>
  .hr_shadow{
  border:none;
  height: 20px;
 	width: 90%;
	height: 50px;
	margin-top: 0;
	border-bottom: 1px solid #2c3e50;
	box-shadow: 0 12px 12px -12px #2c3e50;
  margin: -50px auto 10px;
}
.center_div{
    margin: 0 auto;
  /* value of your choice which suits your alignment */
}

.form-control:focus {
  border-color: #2c3e50;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px #2c3e50 !important;
}
</style>
<div class="container">
  <div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
  <div class="panel panel-default" style="padding:20px;">
            <form class="form-horizontal" style="margin-bottom:30px;">

                <div class="form-group">

                    <div class="col-sm-10 col-sm-offset-1">
                      <h1 style="color:#2c3e50!important">Pendidikan</h1>
                      <h5>Informasikan kepada perusahaan, pendidikan formal apa yang sekarang Anda tempuh.</h5>
                      <hr class="hr_shadow"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                      <label>Jenjang :</label>
                        <select id="jenjang" class="form-control">
                            <option>D3</option>
                            <option>D4</option>
                            <option>S1</option>
                            <option>PROFESI</option>
                            <option>S2</option>
                            <option>S3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                        <label>Nama Perguruan Tinggi : </label>
                        <input type="text" name="nama_perguruan_tinggi" id="nama_perguruan_tinggi" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                        <label>Jurusan : </label>
                        <input type="text" name="jurusan" id="jurusan" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3 col-sm-offset-2">
                        <label>Akreditasi : </label>
                        <input type="text" name="akreditasi" id="akreditasi" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                        <label>Submajor/Konsentrasi : </label>
                        <input type="text" name="submajor" id="submajor" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3 col-sm-offset-2">
                        <label>Nilai IP : </label>
                        <input type="text" name="nilai_ip" id="nilai_ip" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                        <label>Negara : </label>
                        <select id="negara" class="form-control">
                          <option value="gb">(Great Britain) Inggris Raya</option>
                          <option value="af">Afghanistan</option>
                          <option value="za">Afrika Selatan</option>
                          <option value="al">Albania</option>
                          <option value="dz">Aljazair</option>
                          <option value="us">Amerika Serikat</option>
                          <option value="ad">Andorra</option>
                          <option value="ao">Angola</option>
                          <option value="ai">Anguilla</option>
                          <option value="aq">Antarctica</option>
                          <option value="ag">Antigua dan Barbuda</option>
                          <option value="an">Antilles Belanda</option>
                          <option value="ar">Argentina</option>
                          <option value="am">Armenia</option>
                          <option value="aw">Aruba</option>
                          <option value="au">Australia</option>
                          <option value="at">Austria</option>
                          <option value="az">Azerbaijan</option>
                          <option value="bs">Bahama</option>
                          <option value="bh">Bahrain</option>
                          <option value="bd">Bangladesh</option>
                          <option value="bb">Barbados</option>
                          <option value="nl">Belanda</option>
                          <option value="by">Belarusia</option>
                          <option value="be">Belgium</option>
                          <option value="bz">Belize</option>
                          <option value="bj">Benin</option>
                          <option value="bm">Bermuda</option>
                          <option value="bt">Bhutan</option>
                          <option value="bo">Bolivia</option>
                          <option value="ba">Bosnia Herzegovina</option>
                          <option value="bw">Botswana</option>
                          <option value="br">Brazil</option>
                          <option value="io">British Indian Ocean Territory</option>
                          <option value="bn">Brunei Darussalam</option>
                          <option value="bg">Bulgaria</option>
                          <option value="bf">Burkina Faso</option>
                          <option value="bi">Burundi</option>
                          <option value="td">Chad</option>
                          <option value="cl">Chili</option>
                          <option value="cn">China</option>
                          <option value="ci">Cote d&#039;Ivoire (Pantai Gading)</option>
                          <option value="dk">Denmark</option>
                          <option value="dj">Djibouti</option>
                          <option value="dm">Dominica</option>
                          <option value="ec">Ekuador</option>
                          <option value="sv">El Salvador</option>
                          <option value="gq">Equatorial Guinea</option>
                          <option value="er">Eritrea</option>
                          <option value="ee">Estonia</option>
                          <option value="et">Ethiopia</option>
                          <option value="fj">Fiji</option>
                          <option value="ph">Filipina</option>
                          <option value="fi">Finlandia</option>
                          <option value="ga">Gabon</option>
                          <option value="gm">Gambia</option>
                          <option value="ge">Georgia</option>
                          <option value="gh">Ghana</option>
                          <option value="gi">Gibraltar</option>
                          <option value="gl">Greenland</option>
                          <option value="gd">Grenada</option>
                          <option value="gp">Guadeloupe</option>
                          <option value="gu">Guam</option>
                          <option value="gt">Guatemala</option>
                          <option value="gg">Guernsey</option>
                          <option value="gn">Guinea</option>
                          <option value="gw">Guinea-Bissau</option>
                          <option value="gy">Guyana</option>
                          <option value="gf">Guyana Perancis</option>
                          <option value="ht">Haiti</option>
                          <option value="hn">Honduras</option>
                          <option value="hk">Hong Kong</option>
                          <option value="hu">Hungaria</option>
                          <option value="is">Iceland</option>
                          <option value="in">India</option>
                          <option value="id" selected="selected">Indonesia</option>
                          <option value="uk">Inggris</option>
                          <option value="iq">Irak</option>
                          <option value="ir">Iran</option>
                          <option value="ie">Irlandia</option>
                          <option value="im">Isle of Man</option>
                          <option value="il">Israel</option>
                          <option value="it">Italia</option>
                          <option value="jm">Jamaika</option>
                          <option value="jp">Jepang</option>
                          <option value="de">Jerman</option>
                          <option value="je">Jersey</option>
                          <option value="jo">Jordania</option>
                          <option value="kh">Kamboja</option>
                          <option value="cm">Kamerun</option>
                          <option value="ca">Kanada</option>
                          <option value="kz">Kazakhstan</option>
                          <option value="ke">Kenya</option>
                          <option value="ky">Kepulauan Cayman</option>
                          <option value="fk">Kepulauan Falkland</option>
                          <option value="fo">Kepulauan Faroe</option>
                          <option value="mp">Kepulauan Mariana Utara</option>
                          <option value="mh">Kepulauan Marshall</option>
                          <option value="nf">Kepulauan Norfolk</option>
                          <option value="sb">Kepulauan Solomon</option>
                          <option value="tc">Kepulauan Turks and Caicos</option>
                          <option value="vi">Kepulauan Virgin Amerika Serikat</option>
                          <option value="vg">Kepulauan Virgin Inggris</option>
                          <option value="ki">Kiribati</option>
                          <option value="co">Kolombia</option>
                          <option value="km">Komoro</option>
                          <option value="kr">Korea Selatan</option>
                          <option value="kp">Korea Utara</option>
                          <option value="cr">Kosta Rica</option>
                          <option value="hr">Kroasia</option>
                          <option value="cu">Kuba</option>
                          <option value="kw">Kuwait</option>
                          <option value="kg">Kyrgyzstan</option>
                          <option value="la">Laos</option>
                          <option value="lv">Latvia</option>
                          <option value="lb">Lebanon</option>
                          <option value="ls">Lesotho</option>
                          <option value="lr">Liberia</option>
                          <option value="ly">Libya</option>
                          <option value="li">Liechtenstein</option>
                          <option value="lt">Lithuania</option>
                          <option value="lu">Luxembourg</option>
                          <option value="mo">Macau</option>
                          <option value="mk">Macedonia</option>
                          <option value="mg">Madagaskar</option>
                          <option value="mw">Malawi</option>
                          <option value="my">Malaysia</option>
                          <option value="mv">Maldives ( Maladewa)</option>
                          <option value="ml">Mali</option>
                          <option value="mt">Malta</option>
                          <option value="ma">Maroko</option>
                          <option value="mq">Martinique</option>
                          <option value="mr">Mauritania</option>
                          <option value="mu">Mauritius</option>
                          <option value="yt">Mayotte</option>
                          <option value="eg">Mesir</option>
                          <option value="mx">Mexico</option>
                          <option value="fm">Mikronesia</option>
                          <option value="md">Moldova</option>
                          <option value="mc">Monako</option>
                          <option value="mn">Mongolia</option>
                          <option value="me">Montenegro</option>
                          <option value="ms">Montserrat</option>
                          <option value="mz">Mozambique</option>
                          <option value="mm">Myanmar</option>
                          <option value="na">Namibia</option>
                          <option value="nr">Nauru</option>
                          <option value="np">Nepal</option>
                          <option value="nc">New Caledonia (Kaledonia Baru)</option>
                          <option value="nz">New Zealand (selandia Baru)</option>
                          <option value="ne">Niger</option>
                          <option value="ng">Nigeria</option>
                          <option value="ni">Nikaragua</option>
                          <option value="nu">Niue</option>
                          <option value="no">Norwegia</option>
                          <option value="om">Oman</option>
                          <option value="pk">Pakistan</option>
                          <option value="pw">Palau</option>
                          <option value="ps">Palestina</option>
                          <option value="pa">Panama</option>
                          <option value="pg">Papua New Guinea</option>
                          <option value="py">Paraguay</option>
                          <option value="fr">Perancis</option>
                          <option value="pe">Peru</option>
                          <option value="pn">Pitcairn</option>
                          <option value="pl">Polandia</option>
                          <option value="pf">Polynesia Perancis</option>
                          <option value="pt">Portugis</option>
                          <option value="pr">Puerto Rico</option>
                          <option value="ax">Pulau Åland</option>
                          <option value="ac">Pulau Ascension</option>
                          <option value="bv">Pulau Bouvet</option>
                          <option value="cx">Pulau Christmas</option>
                          <option value="cc">Pulau Cocos</option>
                          <option value="ck">Pulau Cook</option>
                          <option value="hm">Pulau Heard dan Kepulauan McDonald</option>
                          <option value="qa">Qatar</option>
                          <option value="cf">Republik Afrika Tengah</option>
                          <option value="cz">Republik Ceko</option>
                          <option value="cd">Republik Demokratik Kongo</option>
                          <option value="do">Republik Dominika</option>
                          <option value="cg">Republik Kongo</option>
                          <option value="re">Reunion</option>
                          <option value="ro">Rumania</option>
                          <option value="ru">Russia</option>
                          <option value="rw">Rwanda</option>
                          <option value="eh">Sahara Barat</option>
                          <option value="kn">Saint Kitts and Nevis</option>
                          <option value="lc">Saint Lucia</option>
                          <option value="vc">Saint Vincent dan Grenadines</option>
                          <option value="ws">Samoa</option>
                          <option value="as">Samoa Amerika</option>
                          <option value="sm">San Marino</option>
                          <option value="st">Sao Tome dan Principe</option>
                          <option value="sa">Saudi Arabia</option>
                          <option value="sn">Senegal</option>
                          <option value="rs">Serbia</option>
                          <option value="sc">Seychelles</option>
                          <option value="sl">Sierra Leone</option>
                          <option value="sg">Singapura</option>
                          <option value="cy">Siprus</option>
                          <option value="sk">Slovakia</option>
                          <option value="si">Slovenia</option>
                          <option value="so">Somalia</option>
                          <option value="es">Spanyol</option>
                          <option value="lk">Sri Lanka</option>
                          <option value="sh">St Helena</option>
                          <option value="pm">St Pierre dan Miquelon</option>
                          <option value="sd">Sudan</option>
                          <option value="sr">Suriname</option>
                          <option value="sj">Svalbard dan Kepulauan Jan Mayen</option>
                          <option value="sz">Swaziland</option>
                          <option value="se">Swedia</option>
                          <option value="ch">Swiss</option>
                          <option value="sy">Syria atau Suriah</option>
                          <option value="tw">Taiwan</option>
                          <option value="tj">Tajikistan</option>
                          <option value="cv">Tanjung Verde</option>
                          <option value="tz">Tanzania</option>
                          <option value="tf">Teritorial Perancis bagian Selatan</option>
                          <option value="th">Thailand</option>
                          <option value="tl">Timor-Leste</option>
                          <option value="tg">Togo</option>
                          <option value="tk">Tokelau</option>
                          <option value="to">Tonga</option>
                          <option value="tt">Trinidad dan Tobago</option>
                          <option value="tn">Tunisia</option>
                          <option value="tr">Turki</option>
                          <option value="tm">Turkmenistan</option>
                          <option value="tv">Tuvalu</option>
                          <option value="ug">Uganda</option>
                          <option value="ua">Ukraina</option>
                          <option value="ae">Uni Emirat Arab</option>
                          <option value="eu">Uni Eropa</option>
                          <option value="uy">Uruguay</option>
                          <option value="su">USSR (tidak dipakai)</option>
                          <option value="uz">Uzbekistan</option>
                          <option value="vu">Vanuatu</option>
                          <option value="va">Vatikan</option>
                          <option value="ve">Venezuela</option>
                          <option value="vn">Vietnam</option>
                          <option value="wf">Wallis dan Futuna</option>
                          <option value="ye">Yaman</option>
                          <option value="yu">Yugoslavia</option>
                          <option value="gr">Yunani</option>
                          <option value="zm">Zambia</option>
                          <option value="zw">Zimbabwe</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                      <label>Provinsi : </label>
                        <select id="provinsi" class="form-control">
                          <option value="">Pilih Provinsi</option>
                          <option value="1">Aceh</option>
                          <option value="2">Sumatera Utara</option>
                          <option value="3">Bengkulu</option>
                          <option value="4">Jambi</option>
                          <option value="5">Riau</option>
                          <option value="6">Sumatera Barat</option>
                          <option value="7">Sumatera Selatan</option>
                          <option value="8">Lampung</option>
                          <option value="9">Kepulauan Bangka Belitung</option>
                          <option value="10">Kepulauan Riau</option>
                          <option value="11">Banten</option>
                          <option value="12">Jawa Barat</option>
                          <option value="13">DKI Jakarta</option>
                          <option value="14">Jawa Tengah</option>
                          <option value="15">Jawa Timur</option>
                          <option value="16">Daerah Istimewa Yogyakarta</option>
                          <option value="17">Bali</option>
                          <option value="18">Nusa Tenggara Barat</option>
                          <option value="19">Nusa Tenggara Timur</option>
                          <option value="20">Kalimantan Barat</option>
                          <option value="21">Kalimantan Selatan</option>
                          <option value="22">Kalimantan Tengah</option>
                          <option value="23">Kalimantan Timur</option>
                          <option value="24">Gorontalo</option>
                          <option value="25">Sulawesi Selatan</option>
                          <option value="26">Sulawesi Tenggara</option>
                          <option value="27">Sulawesi Tengah</option>
                          <option value="28">Sulawesi Utara</option>
                          <option value="29">Sulawesi Barat</option>
                          <option value="30">Maluku</option>
                          <option value="31">Maluku Utara</option>
                          <option value="32">Papua</option>
                          <option value="33">Papua Barat</option>
                          <option value="34">Kalimantan Utara</option>
                          <option value="99">not-defined</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                      <label>Kota :</label>
                        <select id="kota" class="form-control">
                          <option value="">Pilih salah satu</option>
                          <option value="1">Kabupaten Aceh Barat</option>
                          <option value="2">Kabupaten Aceh Barat Daya</option>
                          <option value="3">Kabupaten Aceh Besar</option>
                          <option value="4">Kabupaten Aceh Jaya</option>
                          <option value="5">Kabupaten Aceh Selatan</option>
                          <option value="6">Kabupaten Aceh Singkil</option>
                          <option value="7">Kabupaten Aceh Tamiang</option>
                          <option value="8">Kabupaten Aceh Tengah</option>
                          <option value="9">Kabupaten Aceh Tenggara</option>
                          <option value="10">Kabupaten Aceh Timur</option>
                          <option value="11">Kabupaten Aceh Utara</option>
                          <option value="12">Kabupaten Bener Meriah</option>
                          <option value="13">Kabupaten Bireuen</option>
                          <option value="14">Kabupaten Gayo Lues</option>
                          <option value="15">Kabupaten Nagan Raya</option>
                          <option value="16">Kabupaten Pidie</option>
                          <option value="17">Kabupaten Pidie Jaya</option>
                          <option value="18">Kabupaten Simeulue</option>
                          <option value="19">Kota Banda Aceh</option>
                          <option value="20">Kota Langsa</option>
                          <option value="21">Kota Lhokseumawe</option>
                          <option value="22">Kota Sabang</option>
                          <option value="23">Kota Subulussalam</option>
                          <option value="24">Kabupaten Asahan</option>
                          <option value="25">Kabupaten Batu Bara</option>
                          <option value="26">Kabupaten Dairi</option>
                          <option value="27">Kabupaten Deli Serdang</option>
                          <option value="28">Kabupaten Humbang Hasundutan</option>
                          <option value="29">Kabupaten Karo</option>
                          <option value="30">Kabupaten Labuhanbatu</option>
                          <option value="31">Kabupaten Labuhanbatu Selatan</option>
                          <option value="32">Kabupaten Labuhanbatu Utara</option>
                          <option value="33">Kabupaten Langkat</option>
                          <option value="34">Kabupaten Mandailing Natal</option>
                          <option value="35">Kabupaten Nias</option>
                          <option value="36">Kabupaten Nias Barat</option>
                          <option value="37">Kabupaten Nias Selatan</option>
                          <option value="38">Kabupaten Nias Utara</option>
                          <option value="39">Kabupaten Padang Lawas</option>
                          <option value="40">Kabupaten Padang Lawas Utara</option>
                          <option value="41">Kabupaten Pakpak Bharat</option>
                          <option value="42">Kabupaten Samosir</option>
                          <option value="43">Kabupaten Serdang Bedagai</option>
                          <option value="44">Kabupaten Simalungun</option>
                          <option value="45">Kabupaten Tapanuli Selatan</option>
                          <option value="46">Kabupaten Tapanuli Tengah</option>
                          <option value="47">Kabupaten Tapanuli Utara</option>
                          <option value="48">Kabupaten Toba Samosir</option>
                          <option value="49">Kota Binjai</option>
                          <option value="50">Kota Gunung Sitoli</option>
                          <option value="51">Kota Medan</option>
                          <option value="52">Kota Padang Sidempuan</option>
                          <option value="53">Kota Pematangsiantar</option>
                          <option value="54">Kota Sibolga</option>
                          <option value="55">Kota Tanjung Balai</option>
                          <option value="56">Kota Tebing Tinggi</option>
                          <option value="57">Kabupaten Bengkulu Selatan</option>
                          <option value="58">Kabupaten Bengkulu Tengah</option>
                          <option value="59">Kabupaten Bengkulu Utara</option>
                          <option value="60">Kabupaten Benteng</option>
                          <option value="61">Kabupaten Kaur</option>
                          <option value="62">Kabupaten Kepahiang</option>
                          <option value="63">Kabupaten Lebong</option>
                          <option value="64">Kabupaten Mukomuko</option>
                          <option value="65">Kabupaten Rejang Lebong</option>
                          <option value="66">Kabupaten Seluma</option>
                          <option value="67">Kota Bengkulu</option>
                          <option value="68">Kabupaten Batang Hari</option>
                          <option value="69">Kabupaten Bungo</option>
                          <option value="70">Kabupaten Kerinci</option>
                          <option value="71">Kabupaten Merangin</option>
                          <option value="72">Kabupaten Muaro Jambi</option>
                          <option value="73">Kabupaten Sarolangun</option>
                          <option value="74">Kabupaten Tanjung Jabung Barat</option>
                          <option value="75">Kabupaten Tanjung Jabung Timur</option>
                          <option value="76">Kabupaten Tebo</option>
                          <option value="77">Kota Jambi</option>
                          <option value="78">Kota Sungai Penuh</option>
                          <option value="79">Kabupaten Bengkalis</option>
                          <option value="80">Kabupaten Indragiri Hilir</option>
                          <option value="81">Kabupaten Indragiri Hulu</option>
                          <option value="82">Kabupaten Kampar</option>
                          <option value="83">Kabupaten Kuantan Singingi</option>
                          <option value="84">Kabupaten Pelalawan</option>
                          <option value="85">Kabupaten Rokan Hilir</option>
                          <option value="86">Kabupaten Rokan Hulu</option>
                          <option value="87">Kabupaten Siak</option>
                          <option value="88">Kota Pekanbaru</option>
                          <option value="89">Kota Dumai</option>
                          <option value="90">Kabupaten Kepulauan Meranti</option>
                          <option value="91">Kabupaten Agam</option>
                          <option value="92">Kabupaten Dharmasraya</option>
                          <option value="93">Kabupaten Kepulauan Mentawai</option>
                          <option value="94">Kabupaten Lima PuluhKota</option>
                          <option value="95">Kabupaten Padang Pariaman</option>
                          <option value="96">Kabupaten Pasaman</option>
                          <option value="97">Kabupaten Pasaman Barat</option>
                          <option value="98">Kabupaten Pesisir Selatan</option>
                          <option value="99">Kabupaten Sijunjung</option>
                          <option value="100">Kabupaten Solok</option>
                          <option value="101">Kabupaten Solok Selatan</option>
                          <option value="102">Kabupaten Tanah Datar</option>
                          <option value="103">Kota Bukittinggi</option>
                          <option value="104">Kota Padang</option>
                          <option value="105">Kota Padangpanjang</option>
                          <option value="106">Kota Pariaman</option>
                          <option value="107">Kota Payakumbuh</option>
                          <option value="108">Kota Sawahlunto</option>
                          <option value="109">Kota Solok</option>
                          <option value="110">Kabupaten Banyuasin</option>
                          <option value="111">Kabupaten Empat Lawang</option>
                          <option value="112">Kabupaten Lahat</option>
                          <option value="113">Kabupaten Muara Enim</option>
                          <option value="114">Kabupaten Musi Banyuasin</option>
                          <option value="115">Kabupaten Musi Rawas</option>
                          <option value="116">Kabupaten Ogan Ilir</option>
                          <option value="117">Kabupaten OganKomering Ilir</option>
                          <option value="118">Kabupaten OganKomering Ulu</option>
                          <option value="119">Kabupaten OganKomering Ulu Selatan</option>
                          <option value="120">Kabupaten OganKomering Ulu Timur</option>
                          <option value="121">Kota Lubuklinggau</option>
                          <option value="122">Kota Pagar Alam</option>
                          <option value="123">Kota Palembang</option>
                          <option value="124">Kota Prabumulih</option>
                          <option value="125">Kabupaten Lampung Barat</option>
                          <option value="126">Kabupaten Lampung Selatan</option>
                          <option value="127">Kabupaten Lampung Tengah</option>
                          <option value="128">Kabupaten Lampung Timur</option>
                          <option value="129">Kabupaten Lampung Utara</option>
                          <option value="130">Kabupaten Mesuji</option>
                          <option value="131">Kabupaten Pesawaran</option>
                          <option value="132">Kabupaten Pringsewu</option>
                          <option value="133">Kabupaten Tanggamus</option>
                          <option value="134">Kabupaten Tulang Bawang</option>
                          <option value="135">Kabupaten Tulang Bawang Barat</option>
                          <option value="136">Kabupaten WayKanan</option>
                          <option value="137">Kota Bandar Lampung</option>
                          <option value="138">Kota Metro</option>
                          <option value="139">Kabupaten Bangka</option>
                          <option value="140">Kabupaten Bangka Barat</option>
                          <option value="141">Kabupaten Bangka Selatan</option>
                          <option value="142">Kabupaten Bangka Tengah</option>
                          <option value="143">Kabupaten Belitung</option>
                          <option value="144">Kabupaten Belitung Timur</option>
                          <option value="145">Kota Pangkal Pinang</option>
                          <option value="146">Kabupaten Bintan</option>
                          <option value="147">Kabupaten Karimun</option>
                          <option value="148">Kabupaten Kepulauan Anambas</option>
                          <option value="149">Kabupaten Lingga</option>
                          <option value="150">Kabupaten Natuna</option>
                          <option value="151">Kota Batam</option>
                          <option value="152">Kota Tanjung Pinang</option>
                          <option value="153">Kabupaten Lebak</option>
                          <option value="154">Kabupaten Pandeglang</option>
                          <option value="155">Kabupaten Serang</option>
                          <option value="156">Kabupaten Tangerang</option>
                          <option value="157">Kota Cilegon</option>
                          <option value="158">Kota Serang</option>
                          <option value="159">Kota Tangerang</option>
                          <option value="160">Kota Tangerang Selatan</option>
                          <option value="161">Kabupaten Bandung</option>
                          <option value="162">Kabupaten Bandung Barat</option>
                          <option value="163">Kabupaten Bekasi</option>
                          <option value="164">Kabupaten Bogor</option>
                          <option value="165">Kabupaten Ciamis</option>
                          <option value="166">Kabupaten Cianjur</option>
                          <option value="167">Kabupaten Cirebon</option>
                          <option value="168">Kabupaten Garut</option>
                          <option value="169">Kabupaten Indramayu</option>
                          <option value="170">Kabupaten Karawang</option>
                          <option value="171">Kabupaten Kuningan</option>
                          <option value="172">Kabupaten Majalengka</option>
                          <option value="173">Kabupaten Purwakarta</option>
                          <option value="174">Kabupaten Subang</option>
                          <option value="175">Kabupaten Sukabumi</option>
                          <option value="176">Kabupaten Sumedang</option>
                          <option value="177">Kabupaten Tasikmalaya</option>
                          <option value="178">Kota Bandung</option>
                          <option value="179">Kota Banjar</option>
                          <option value="180">Kota Bekasi</option>
                          <option value="181">Kota Bogor</option>
                          <option value="182">Kota Cimahi</option>
                          <option value="183">Kota Cirebon</option>
                          <option value="184">Kota Depok</option>
                          <option value="185">Kota Sukabumi</option>
                          <option value="186">Kota Tasikmalaya</option>
                          <option value="187">Kabupaten Administrasi Kepulauan Seribu</option>
                          <option value="188">Kota Administrasi Jakarta Barat</option>
                          <option value="189">Kota Administrasi Jakarta Pusat</option>
                          <option value="190">Kota Administrasi Jakarta Selatan</option>
                          <option value="191">Kota Administrasi Jakarta Timur</option>
                          <option value="192">Kota Administrasi Jakarta Utara</option>
                          <option value="193">Kabupaten Banjarnegara</option>
                          <option value="194">Kabupaten Banyumas</option>
                          <option value="195">Kabupaten Batang</option>
                          <option value="196">Kabupaten Blora</option>
                          <option value="197">Kabupaten Boyolali</option>
                          <option value="198">Kabupaten Brebes</option>
                          <option value="199">Kabupaten Cilacap</option>
                          <option value="200">Kabupaten Demak</option>
                          <option value="201">Kabupaten Grobogan</option>
                          <option value="202">Kabupaten Jepara</option>
                          <option value="203">Kabupaten Karanganyar</option>
                          <option value="204">Kabupaten Kebumen</option>
                          <option value="205">Kabupaten Kendal</option>
                          <option value="206">Kabupaten Klaten</option>
                          <option value="207">Kabupaten Kudus</option>
                          <option value="208">Kabupaten Magelang</option>
                          <option value="209">Kabupaten Pati</option>
                          <option value="210">Kabupaten Pekalongan</option>
                          <option value="211">Kabupaten Pemalang</option>
                          <option value="212">Kabupaten Purbalingga</option>
                          <option value="213">Kabupaten Purworejo</option>
                          <option value="214">Kabupaten Rembang</option>
                          <option value="215">Kabupaten Semarang</option>
                          <option value="216">Kabupaten Sragen</option>
                          <option value="217">Kabupaten Sukoharjo</option>
                          <option value="218">Kabupaten Tegal</option>
                          <option value="219">Kabupaten Temanggung</option>
                          <option value="220">Kabupaten Wonogiri</option>
                          <option value="221">Kabupaten Wonosobo</option>
                          <option value="222">Kota Magelang</option>
                          <option value="223">Kota Pekalongan</option>
                          <option value="224">Kota Salatiga</option>
                          <option value="225">Kota Semarang</option>
                          <option value="226">Kota Surakarta</option>
                          <option value="227">Kota Tegal</option>
                          <option value="228">Kabupaten Bangkalan</option>
                          <option value="229">Kabupaten Banyuwangi</option>
                          <option value="230">Kabupaten Blitar</option>
                          <option value="231">Kabupaten Bojonegoro</option>
                          <option value="232">Kabupaten Bondowoso</option>
                          <option value="233">Kabupaten Gresik</option>
                          <option value="234">Kabupaten Jember</option>
                          <option value="235">Kabupaten Jombang</option>
                          <option value="236">Kabupaten Kediri</option>
                          <option value="237">Kabupaten Lamongan</option>
                          <option value="238">Kabupaten Lumajang</option>
                          <option value="239">Kabupaten Madiun</option>
                          <option value="240">Kabupaten Magetan</option>
                          <option value="241">Kabupaten Malang</option>
                          <option value="242">Kabupaten Mojokerto</option>
                          <option value="243">Kabupaten Nganjuk</option>
                          <option value="244">Kabupaten Ngawi</option>
                          <option value="245">Kabupaten Pacitan</option>
                          <option value="246">Kabupaten Pamekasan</option>
                          <option value="247">Kabupaten Pasuruan</option>
                          <option value="248">Kabupaten Ponorogo</option>
                          <option value="249">Kabupaten Probolinggo</option>
                          <option value="250">Kabupaten Sampang</option>
                          <option value="251">Kabupaten Sidoarjo</option>
                          <option value="252">Kabupaten Situbondo</option>
                          <option value="253">Kabupaten Sumenep</option>
                          <option value="254">Kabupaten Trenggalek</option>
                          <option value="255">Kabupaten Tuban</option>
                          <option value="256">Kabupaten Tulungagung</option>
                          <option value="257">Kota Batu</option>
                          <option value="258">Kota Blitar</option>
                          <option value="259">Kota Kediri</option>
                          <option value="260">Kota Madiun</option>
                          <option value="261">Kota Malang</option>
                          <option value="262">Kota Mojokerto</option>
                          <option value="263">Kota Pasuruan</option>
                          <option value="264">Kota Probolinggo</option>
                          <option value="265">Kota Surabaya</option>
                          <option value="266">Kabupaten Bantul</option>
                          <option value="267">Kabupaten GunungKidul</option>
                          <option value="268">Kabupaten Kulon Progo</option>
                          <option value="269">Kabupaten Sleman</option>
                          <option value="270">Kota Yogyakarta</option>
                          <option value="271">Kabupaten Badung</option>
                          <option value="272">Kabupaten Bangli</option>
                          <option value="273">Kabupaten Buleleng</option>
                          <option value="274">Kabupaten Gianyar</option>
                          <option value="275">Kabupaten Jembrana</option>
                          <option value="276">Kabupaten Karangasem</option>
                          <option value="277">Kabupaten Klungkung</option>
                          <option value="278">Kabupaten Tabanan</option>
                          <option value="279">Kota Denpasar</option>
                          <option value="280">Kabupaten Bima</option>
                          <option value="281">Kabupaten Dompu</option>
                          <option value="282">Kabupaten Lombok Barat</option>
                          <option value="283">Kabupaten Lombok Tengah</option>
                          <option value="284">Kabupaten Lombok Timur</option>
                          <option value="285">Kabupaten Lombok Utara</option>
                          <option value="286">Kabupaten Sumbawa</option>
                          <option value="287">Kabupaten Sumbawa Barat</option>
                          <option value="288">Kota Bima</option>
                          <option value="289">Kota Mataram</option>
                          <option value="290">Kabupaten Kupang</option>
                          <option value="291">Kabupaten Timor Tengah Selatan</option>
                          <option value="292">Kabupaten Timor Tengah Utara</option>
                          <option value="293">Kabupaten Belu</option>
                          <option value="294">Kabupaten Alor</option>
                          <option value="295">Kabupaten Flores Timur</option>
                          <option value="296">Kabupaten Sikka</option>
                          <option value="297">Kabupaten Ende</option>
                          <option value="298">Kabupaten Ngada</option>
                          <option value="299">Kabupaten Manggarai</option>
                          <option value="300">Kabupaten Sumba Timur</option>
                          <option value="301">Kabupaten Sumba Barat</option>
                          <option value="302">Kabupaten Lembata</option>
                          <option value="303">Kabupaten Rote Ndao</option>
                          <option value="304">Kabupaten Manggarai Barat</option>
                          <option value="305">Kabupaten Nagekeo</option>
                          <option value="306">Kabupaten Sumba Tengah</option>
                          <option value="307">Kabupaten Sumba Barat Daya</option>
                          <option value="308">Kabupaten Manggarai Timur</option>
                          <option value="309">Kabupaten Sabu Raijua</option>
                          <option value="310">Kota Kupang</option>
                          <option value="311">Kabupaten Bengkayang</option>
                          <option value="312">Kabupaten Kapuas Hulu</option>
                          <option value="313">Kabupaten Kayong Utara</option>
                          <option value="314">Kabupaten Ketapang</option>
                          <option value="315">Kabupaten Kubu Raya</option>
                          <option value="316">Kabupaten Landak</option>
                          <option value="317">Kabupaten Melawi</option>
                          <option value="318">Kabupaten Pontianak</option>
                          <option value="319">Kabupaten Sambas</option>
                          <option value="320">Kabupaten Sanggau</option>
                          <option value="321">Kabupaten Sekadau</option>
                          <option value="322">Kabupaten Sintang</option>
                          <option value="323">Kota Pontianak</option>
                          <option value="324">Kota Singkawang</option>
                          <option value="325">Kabupaten Balangan</option>
                          <option value="326">Kabupaten Banjar</option>
                          <option value="327">Kabupaten BaritoKuala</option>
                          <option value="328">Kabupaten Hulu Sungai Selatan</option>
                          <option value="329">Kabupaten Hulu Sungai Tengah</option>
                          <option value="330">Kabupaten Hulu Sungai Utara</option>
                          <option value="331">Kabupaten Kotabaru</option>
                          <option value="332">Kabupaten Tabalong</option>
                          <option value="333">Kabupaten Tanah Bumbu</option>
                          <option value="334">Kabupaten Tanah Laut</option>
                          <option value="335">Kabupaten Tapin</option>
                          <option value="336">Kota Banjarbaru</option>
                          <option value="337">Kota Banjarmasin</option>
                          <option value="338">Kabupaten Barito Selatan</option>
                          <option value="339">Kabupaten Barito Timur</option>
                          <option value="340">Kabupaten Barito Utara</option>
                          <option value="341">Kabupaten Gunung Mas</option>
                          <option value="342">Kabupaten Kapuas</option>
                          <option value="343">Kabupaten Katingan</option>
                          <option value="344">Kabupaten Kotawaringin Barat</option>
                          <option value="345">Kabupaten Kotawaringin Timur</option>
                          <option value="346">Kabupaten Lamandau</option>
                          <option value="347">Kabupaten Murung Raya</option>
                          <option value="348">Kabupaten Pulang Pisau</option>
                          <option value="349">Kabupaten Sukamara</option>
                          <option value="350">Kabupaten Seruyan</option>
                          <option value="351">Kota Palangka Raya</option>
                          <option value="352">Kabupaten Berau</option>
                          <option value="353">Kabupaten Bulungan</option>
                          <option value="354">Kabupaten Kutai Barat</option>
                          <option value="355">Kabupaten KutaiKartanegara</option>
                          <option value="356">Kabupaten Kutai Timur</option>
                          <option value="357">Kabupaten Malinau</option>
                          <option value="358">Kabupaten Nunukan</option>
                          <option value="359">Kabupaten Paser</option>
                          <option value="360">Kabupaten Penajam Paser Utara</option>
                          <option value="361">Kabupaten Tana Tidung</option>
                          <option value="362">Kota Balikpapan</option>
                          <option value="363">Kota Bontang</option>
                          <option value="364">Kota Samarinda</option>
                          <option value="365">Kota Tarakan</option>
                          <option value="366">Kabupaten Boalemo</option>
                          <option value="367">Kabupaten Bone Bolango</option>
                          <option value="368">Kabupaten Gorontalo</option>
                          <option value="369">Kabupaten Gorontalo Utara</option>
                          <option value="370">Kabupaten Pohuwato</option>
                          <option value="371">Kota Gorontalo</option>
                          <option value="372">Kabupaten Bantaeng</option>
                          <option value="373">Kabupaten Barru</option>
                          <option value="374">Kabupaten Bone</option>
                          <option value="375">Kabupaten Bulukumba</option>
                          <option value="376">Kabupaten Enrekang</option>
                          <option value="377">Kabupaten Gowa</option>
                          <option value="378">Kabupaten Jeneponto</option>
                          <option value="379">Kabupaten Kepulauan Selayar</option>
                          <option value="380">Kabupaten Luwu</option>
                          <option value="381">Kabupaten Luwu Timur</option>
                          <option value="382">Kabupaten Luwu Utara</option>
                          <option value="383">Kabupaten Maros</option>
                          <option value="384">Kabupaten Pangkajene danKepulauan</option>
                          <option value="385">Kabupaten Pinrang</option>
                          <option value="386">Kabupaten Sidenreng Rappang</option>
                          <option value="387">Kabupaten Sinjai</option>
                          <option value="388">Kabupaten Soppeng</option>
                          <option value="389">Kabupaten Takalar</option>
                          <option value="390">Kabupaten Tana Toraja</option>
                          <option value="391">Kabupaten Toraja Utara</option>
                          <option value="392">Kabupaten Wajo</option>
                          <option value="393">Kota Makassar</option>
                          <option value="394">Kota Palopo</option>
                          <option value="395">Kota Parepare</option>
                          <option value="396">Kabupaten Bombana</option>
                          <option value="397">Kabupaten Buton</option>
                          <option value="398">Kabupaten Buton Utara</option>
                          <option value="399">Kabupaten Kolaka</option>
                          <option value="400">Kabupaten Kolaka Utara</option>
                          <option value="401">Kabupaten Konawe</option>
                          <option value="402">Kabupaten Konawe Selatan</option>
                          <option value="403">Kabupaten Konawe Utara</option>
                          <option value="404">Kabupaten Muna</option>
                          <option value="405">Kabupaten Wakatobi</option>
                          <option value="406">Kota Bau-Bau</option>
                          <option value="407">Kota Kendari</option>
                          <option value="408">Kabupaten Banggai</option>
                          <option value="409">Kabupaten BanggaiKepulauan</option>
                          <option value="410">Kabupaten Buol</option>
                          <option value="411">Kabupaten Donggala</option>
                          <option value="412">Kabupaten Morowali</option>
                          <option value="413">Kabupaten Parigi Moutong</option>
                          <option value="414">Kabupaten Poso</option>
                          <option value="415">Kabupaten Tojo Una-Una</option>
                          <option value="416">Kabupaten Toli-Toli</option>
                          <option value="417">Kabupaten Sigi</option>
                          <option value="418">Kota Palu</option>
                          <option value="419">Kabupaten Bolaang Mongondow</option>
                          <option value="420">Kabupaten Bolaang Mongondow Selatan</option>
                          <option value="421">Kabupaten Bolaang Mongondow Timur</option>
                          <option value="422">Kabupaten Bolaang Mongondow Utara</option>
                          <option value="423">Kabupaten Kepulauan Sangihe</option>
                          <option value="424">Kabupaten Kepulauan Siau Tagulandang Biaro</option>
                          <option value="425">Kabupaten Kepulauan Talaud</option>
                          <option value="426">Kabupaten Minahasa</option>
                          <option value="427">Kabupaten Minahasa Selatan</option>
                          <option value="428">Kabupaten Minahasa Tenggara</option>
                          <option value="429">Kabupaten Minahasa Utara</option>
                          <option value="430">Kota Bitung</option>
                          <option value="431">Kota Kotamobagu</option>
                          <option value="432">Kota Manado</option>
                          <option value="433">Kota Tomohon</option>
                          <option value="434">Kabupaten Majene</option>
                          <option value="435">Kabupaten Mamasa</option>
                          <option value="436">Kabupaten Mamuju</option>
                          <option value="437">Kabupaten Mamuju Utara</option>
                          <option value="438">Kabupaten Polewali Mandar</option>
                          <option value="439">Kabupaten Buru</option>
                          <option value="440">Kabupaten Buru Selatan</option>
                          <option value="441">Kabupaten Kepulauan Aru</option>
                          <option value="442">Kabupaten Maluku Barat Daya</option>
                          <option value="443">Kabupaten Maluku Tengah</option>
                          <option value="444">Kabupaten Maluku Tenggara</option>
                          <option value="445">Kabupaten Maluku Tenggara Barat</option>
                          <option value="446">Kabupaten Seram Bagian Barat</option>
                          <option value="447">Kabupaten Seram Bagian Timur</option>
                          <option value="448">Kota Ambon</option>
                          <option value="449">Kota Tual</option>
                          <option value="450">Kabupaten Halmahera Barat</option>
                          <option value="451">Kabupaten Halmahera Tengah</option>
                          <option value="452">Kabupaten Halmahera Utara</option>
                          <option value="453">Kabupaten Halmahera Selatan</option>
                          <option value="454">Kabupaten Kepulauan Sula</option>
                          <option value="455">Kabupaten Halmahera Timur</option>
                          <option value="456">Kabupaten Pulau Morotai</option>
                          <option value="457">Kota Ternate</option>
                          <option value="458">Kota Tidore Kepulauan</option>
                          <option value="459">Kabupaten Asmat</option>
                          <option value="460">Kabupaten Biak Numfor</option>
                          <option value="461">Kabupaten Boven Digoel</option>
                          <option value="462">Kabupaten Deiyai</option>
                          <option value="463">Kabupaten Dogiyai</option>
                          <option value="464">Kabupaten Intan Jaya</option>
                          <option value="465">Kabupaten Jayapura</option>
                          <option value="466">Kabupaten Jayawijaya</option>
                          <option value="467">Kabupaten Keerom</option>
                          <option value="468">Kabupaten Kepulauan Yapen</option>
                          <option value="469">Kabupaten Lanny Jaya</option>
                          <option value="470">Kabupaten Mamberamo Raya</option>
                          <option value="471">Kabupaten Mamberamo Tengah</option>
                          <option value="472">Kabupaten Mappi</option>
                          <option value="473">Kabupaten Merauke</option>
                          <option value="474">Kabupaten Mimika</option>
                          <option value="475">Kota Nabire</option>
                          <option value="476">Kabupaten Nduga</option>
                          <option value="477">Kabupaten Paniai</option>
                          <option value="478">Kabupaten Pegunungan Bintang</option>
                          <option value="479">Kabupaten Puncak</option>
                          <option value="480">Kabupaten Puncak Jaya</option>
                          <option value="481">Kabupaten Sarmi</option>
                          <option value="482">Kabupaten Supiori</option>
                          <option value="483">Kabupaten Tolikara</option>
                          <option value="484">Kabupaten Waropen</option>
                          <option value="485">Kabupaten Yahukimo</option>
                          <option value="486">Kabupaten Yalimo</option>
                          <option value="487">Kota Jayapura</option>
                          <option value="488">Kabupaten Fakfak</option>
                          <option value="489">Kabupaten Kaimana</option>
                          <option value="490">Kabupaten Manokwari</option>
                          <option value="491">Kabupaten Maybrat</option>
                          <option value="492">Kabupaten Raja Ampat</option>
                          <option value="493">Kabupaten Sorong</option>
                          <option value="494">Kabupaten Sorong Selatan</option>
                          <option value="495">Kabupaten Tambrauw</option>
                          <option value="496">Kabupaten Teluk Bintuni</option>
                          <option value="497">Kabupaten Teluk Wondama</option>
                          <option value="498">Kota Sorong</option>
                          <option value="499">Kota Banjar</option>
                          <option value="999">Not defined</option>
                          <option value="1000">Seluruh Indonesia</option>
                          <option value="1006">Kota Tanjung Selor</option>
                          <option value="1007">Kota Purwokerto</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                      <label>Apakah Anda sudah lulus?</label>
                        <div class="row">
                            <div class="col-sm-3">
                                <label class="radio-lulus">
                                    <input type="radio" id="tidakRadio" value="Pria"> Tidak
                                </label>
                            </div>
                            <div class="col-sm-3">
                                <label class="radio-lulus">
                                    <input type="radio" id="yaRadio" value="Wanita"> Ya
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                        <a id="submit-data-diri" style="background-color:#2c3e50!important;color:white;" class="btn btn-block">Simpan</a>
                    </div>
                </div>
            </form> <!-- /form -->
          </div>


        </div>
        </div>
        </div> <!-- ./container -->


        <!-- <div class="footer">
          <div class="footer-inner">
            <div class="container">
              <div class="row">
                <div class="span12"> &copy; 2018 <a href="#">pamahire.com</a>  </div> -->
                <!-- /span12 -->
              <!-- </div> -->
              <!-- /row -->

            <!-- </div>
          </div> -->
            <!-- /container -->
          <!-- </div> -->
          <!-- /footer-inner -->
        <!-- </div> -->
        <!-- /footer -->
        <!-- Le javascript
        ================================================== -->

        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo get_template_directory(dirname(__FILE__), 'js/') ;?>jquery-3.3.1.min.js"></script>
        <script src="<?php echo get_template_directory(dirname(__FILE__), 'js/') ;?>bootstrap.min.js"></script>
        <script>
        $("#submit-data-diri").click(function(){
          alert("yuhu");
          // var action = $('#form-user').attr('action');
          //
          // //var mass_action_type = $('#form-user #mass_action_type').val();
          //
          // // if(action == 'mass'){
          // //   var datatosend = $('#tbl-user input').serialize() + '&mass_action_type='+mass_action_type;
          // // }
          // // else{
          // var datatosend = $('#form-user').serialize();
          // // }
          // console.log(datatosend);
          //
          // $.ajax('http://localhost:8080/PAMAhire/user/action/tambah', {
          //   dataType : 'json',
          //   type : 'POST',
          //   data: datatosend,
          //   success: function(data){
          //     console.log(data);
          //     if(data.status == 'success'){
          //       alert('yuhii');
          //     }
          //
          //   }
          //
          // });
        });
        </script>
        </body>
  </html>
