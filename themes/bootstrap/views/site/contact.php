<?php $this->pageTitle = "contact us"?>
<div class="container">
        <!-- Example row of columns -->
        <section class="about p-4">
			<h1>Contact Us</h1>
            <div class="row col-lg-6">
				<div class="form">
					<?php $form = $this->beginWidget('CActiveForm',array(
						'id' => 'contact-form',
						'enableAjaxValidation'=>true,
						'enableClientValidation'=>true,
						'focus'=>array($model,'name'),
					)); ?>

					<?php echo $form->errorSummary($model); ?>

					<div class="row">
						<?php echo $form->labelEx($model,'name'); ?>
						<?php echo $form->textField($model,'name') ?>
						<?php echo $form->error($model,'name'); ?>
					</div>

					<div class="row">
						<?php echo $form->labelEx($model,'email'); ?>
						<?php echo $form->textField($model,'email') ?>
						<?php echo $form->error($model,'email'); ?>
					</div>

					<div class="row">
						<?php echo $form->labelEx($model,'subject'); ?>
						<?php echo $form->textField($model,'subject') ?>
						<?php echo $form->error($model,'subject'); ?>
					</div>

					<div class="row">
						<?php echo $form->labelEx($model,'body'); ?>
						<?php echo $form->textArea($model,'body',array('rows' => 6, 'cols' => 50)) ?>
						<?php echo $form->error($model,'body',array('class' => 'danger')); ?>
					</div>

					<?php if(CCaptcha::checkRequirements()): ?>
					<div class="row">
						<?php echo $form->labelEx($model,'verifyCode'); ?>
						<div>
						<?php $this->widget('CCaptcha'); ?>
						<?php echo $form->textField($model,'verifyCode'); ?>
						</div>
						<div class="hint">Please enter the letters as they are shown in the image above.
						<br/>Letters are not case-sensitive.</div>
						<?php echo $form->error($model,'verifyCode'); ?>
					</div>
					<?php endif; ?>
					
					<div class="row submit mt-5">
							<?php echo CHtml::submitButton('Login'); ?>
					</div>

					<?php $this->endWidget(); ?>

				</div>
				
            </div>
        </section>


      </div> <!-- /container -->
