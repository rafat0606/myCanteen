<?php  ?>
<html>
<body>
<?php echo form_open_multipart('NewItemController/savedata') ?>

		
					<p class="pj-multilang-wrap" data-index="1" style="display: ">
				<label class="title">Name</label>
				<span class="inline_block">
					<input type="text" id="i18n_name_1" name="name" class="pj-form-field w300 required" lang="1" />
									</span>
			</p>
						<p class="pj-multilang-wrap" data-index="1" style="display: ">
				<label class="title">Description:</label>
				<span class="inline_block">
					<textarea id="i18n_description_1" name="description" class="pj-form-field w500 h150 required" lang="1"></textarea>
									</span>
			</p>
					<p>
			<label class="title">Category</label>
			<span class="inline_block" id="boxCategory">
									<select name="category_id" id="category_id" class="pj-form-field required w300">
						<option value="1">Breakfast</option><option value="3">Deli Platters</option><option value="4">Desserts</option><option value="5">Drinks</option><option value="6">Snacks</option><option value="7">Sushi</option>					</select>
								</span>
		</p>
		
		<p id="signle_price" style="display: block;">
			<label class="title">Price</label>
			<span class="pj-form-field-custom pj-form-field-custom-before">
				<span class="pj-form-field-before"><abbr class="pj-form-field-icon-text">&euro;</abbr></span>
				<input type="text" id="price" name="price" class="pj-form-field pj-positive-number w80"/>
			</span>
		</p>
		<!-- <div id="multiple_prices" style="display: none;">
			<p class="pj-size-count pj-size-title">
				<label class="title">&nbsp;</label>
				<span class="inline_block">
					<label class="content float_left r218">Size</label>
					<label class="content float_left">Price</label>
				</span>
			</p>
			<div id="fd_size_list" class="fd-size-list">
								<div class="fd-size-row" data-index="fd_751784">
											<p class="pj-multilang-wrap" data-index="1" style="display: ">
							<label class="title fd-title-fd_751784">Size 1:</label>
							<span class="inline_block">
								<input type="text" name="i18n[1][price_name][fd_751784]" class="pj-form-field float_left r3 w200 fdRequired" lang="1"/>
															</span>
						</p>
											<div class="pj-size-count">
						<span class="pj-form-field-custom pj-form-field-custom-before">
							<span class="pj-form-field-before"><abbr class="pj-form-field-icon-text">&euro;</abbr></span>
							<input type="text" name="product_price[fd_751784]" class="pj-form-field pj-positive-number w80"/>
						</span>
					</div>
				</div>
			</div> -->
			<!-- <p>
				<label class="title">&nbsp;</label>
				<input type="button" value="+ Add" class="pj-button pj-add-size" />
			</p> -->
		</div>
		<!-- <p>
			<label class="title">Image</label>
			<span class="inline_block">
				<input type="file" name="image" id="image" class="pj-form-field w300"/>
			</span>
		</p> -->
		<!-- <p>
			<label class="title">Status</label>
			<span class="inline_block">
				<select name="status" id="status" class="pj-form-field required">
					<option value="">-- Choose--</option>
					<option value="F">Inactive</option><option value="T" selected="selected">Active</option>				</select>
			</span>
		</p> -->

		<?php echo $error;?>

<?php echo form_open_multipart('upload/do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<!-- <input type="submit" value="upload" /> -->


		<p>
			<label class="title">&nbsp;</label>
			<span class="inline_block">
				<input type="submit" name="save" value="Save" class="pj-button" />
				<input type="button" value="Cancel" class="pj-button" onclick="window.location.href='https://demo.phpjabbers.com/1554699234_502/index.php?controller=pjAdminProducts&action=pjActionIndex';" />
			</span>
		</p>
	</form>

</body>
</html>
