<?php
/* Smarty version 3.1.39, created on 2021-09-22 13:37:51
  from 'C:\wamp64\www\MonProjet\modules\paytech\views\templates\admin\config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614b31afccef77_64306853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a24598263e09579683b6869219a25585d9e38c46' => 
    array (
      0 => 'C:\\wamp64\\www\\MonProjet\\modules\\paytech\\views\\templates\\admin\\config.tpl',
      1 => 1632317810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614b31afccef77_64306853 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['output']->value;?>


<div class="pe_header">
    <div class="pe_headerConfig pe_active" value="1">
        A-propos
    </div>
    <div class="pe_headerConfig" value="2">
        Configuration
    </div>

</div>

<div class="pe_container">
    <div class="pe_produit">
        <div class="pe_contenerLogo">
            <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
views/img/paytech.png">
        </div><br><br><br><br>
        <div class="pe_text">
            PayTech la meilleure <br>plateforme de paiement en ligne <br> Web & Mobile
        </div><br><br><br><br>
        <div class="pe_textLineBloc">
            <h1>Paiement rapide</h1>
            PayTech propose sa plateforme sécurisée<br> de paiement
            en ligne pour faciliter les transactions <br>entre les professionnels
            et leurs clients, avec ou sans site Web.
        </div>
        <div class="pe_textLineBloc">
           <h1>Service sécurisé</h1>
            Les contrôles de fraude, les mises à jour et <br>
            vérifications nécessaires à la protection et <br>
            à la sécurité de vos transactions
            font partie <br>de nos tâches quotidiennes.
        </div>

    </div>
    <div class="pe_parametre">
        <div>
            <?php echo $_smarty_tpl->tpl_vars['seting']->value;?>

        </div>
        <div class="formGroup">

        </div>
    </div>

    <div class="pe_footerConfig">
    <div style="font-size: 40px;text-align: center;padding-top: 10px">
        Coryright PayTech <?php echo date("Y");?>

    </div>
    </div>

</div>
<?php }
}
