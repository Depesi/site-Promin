<!--!POPUP-->
<div id="popup" class="popup__feedback">
		<div class="popup__body">
			<form class="popup__info" action="post.php" method="post">
				<div class="popup__close">
					<a href="#"> <img src="./icons/x.svg" alt="Вихід"></a>
				</div>
				<div class="popup__info_title">
					Залиште свої дані і ми вам передзвонимо
				</div>
				<div class="popup__info_enter">
					<label for="info__enter_name" class="info__enter_label">
						<span class="info__over"> Ваше ім'я </span>
						<input type="text" id="info__enter_name" class="info__enter" placeholder="Ім'я" name="Name" required> 
					</label>
				</div>
				<div class="popup__info_enter">
					<label for="info__enter_number" class="info__enter_label">
						<span class="info__over"> Номер телефону </span>
						<input type="text" id="info__enter_number" class="info__enter" placeholder="0XX..."
							pattern="0[0-9]{9,9}" name="Phone" required>
					</label>
				</div>
				<input type="submit" class="popup__info_submit" value="Відправити">
			</form>
		</div>
	</div>
<!--!POPUP-->