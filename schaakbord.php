<style>
.a {
	width: 32px;
	height: 32px;
	background-color: #000;
	border: 0;
}
.b {
	width: 32px;
	height: 32px;
	background-color: #fff;
	border: 0;
}
</style>

<table>
	<tbody>
		<?php $kkk = 0; for ($i = 1; $i <= 8; $i++) { ?>
		<tr>
			<?php for ($a = 1; a <= 8; $a++) { ?>
			<td class="<?php if ($kkk = 0) { ?>a<?php } else { ?>b<?php } ?>"></td>
			<?php } ?>
		</tr>
		<?php } ?>
	</tbody>
</table>