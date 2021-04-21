<form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" class="search-field" name="s" placeholder="Buscar" value="<?php echo get_search_query(); ?>">
    <input type="submit" value="Buscar">
</form>
<style>

#searchform {
	position:relative;
}

#searchform input[type=submit] {
    background: url(/wp-content/uploads/2021/04/lupa-busca.svg) no-repeat center;
    background-size: 20px;
    text-indent: -9999em;
  	border:none;
  	width:25px;
  	height:25px;
  	position:absolute;
  	right:5%;
    top:calc(50% - 12.5px);
  	cursor:pointer;
}

#searchform input[type="text"] {
	border-radius:10px;
    border:1px solid rgba(0,101,68,0.28);
  	background-color:#f7f7f7;
  	height:35px;
    padding:10px 7% 10px 10px;
    width:100%;
    font-weight:100;
    font-family:'Raleway',sans-serif;
  	font-size:16px;
}

#searchform ::-webkit-input-placeholder { /* Edge */
  color: #a6a6a6;
}

#searchform :-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #a6a6a6;
}

#searchform ::placeholder {
  color: #a6a6a6;
}



.footer-search #searchform input[type=submit] {
    background: url(/wp-content/uploads/2021/04/lupa-busca.svg) no-repeat center;
  	    background-size: 15px;
}

.footer-search #searchform input[type="text"] {
    border:1px solid rgba(255,255,255,0.1);
  	background-color:rgba(26,109,82,0.28);
  	color:#ffffff;
}

.footer-search #searchform ::-webkit-input-placeholder { /* Edge */
  color: #ffffff;
}

.footer-search #searchform :-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #ffffff;
}

.footer-search #searchform ::placeholder {
  color: #ffffff;
}

</style>
