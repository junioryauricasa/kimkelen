<?php /*
 * Kimkëlen - School Management Software
 * Copyright (C) 2013 CeSPI - UNLP <desarrollo@cespi.unlp.edu.ar>
 *
 * This file is part of Kimkëlen.
 *
 * Kimkëlen is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License v2.0 as published by
 * the Free Software Foundation.
 *
 * Kimkëlen is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Kimkëlen.  If not, see <http://www.gnu.org/licenses/gpl-2.0.html>.
 */ ?>

<?php use_stylesheet('/css/report-card.css') ?>
<?php use_helper('Date') ?>
<div class="certificate-wrapper">
	<div class="report-content">
		<?php include_partial('certificate_header');?>
		<div class="report-text">
			<p>
				El/La director/a del <?php echo SchoolBehaviourFactory::getInstance()->getSchoolName() ?> de la Universidad Nacional de La Plata, hace constar que
			    <b><?php echo $student .' '. $student->getPerson()->getFullIdentification() ?> </b>
			    es alumno regular de <?php echo $student->getCurrentStudentCareerSchoolYear()->getYear() . '° año'?>, y cursa 1 o 2 (optativo) veces 
			    por semana a contraturno en el presente ciclo lectivo.
			</p>
			<?php include_partial('certificate_footer_text');?>
		</div>
		<div id="signature"><?php echo __('Firma de la autoridad')?></div>
	</div>
</div>


