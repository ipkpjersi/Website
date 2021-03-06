<?php
if (!defined('IN_SITE')) {
	die("You do not have permission to access this file.");
}
?>

<article class="text-info table-dark spaced-body full-width full-height">
	<div class="container border-left border-info border-right table-wrapper-scroll-y mCustomScrollbar"
		 data-mcs-theme="minimal">
		<h2 class="h2 text-center text-capitalize display-3 pb-4">Quest List</h2>
		<div class="row sm-stats" style="text-transform: unset;">
			<div class="text-primary">
				<div class="flex-row">
					<div class="pl-3 pr-3 container">

						<!-- Begin F2P Quests -->
						<div id="f2p" class="stats pl-5 pr-5 mb-5">
							<h3 class="text-info pt-3">F2P Quests</h3>
							<div id="row1" class="d-flex flex-wrap justify-content-between pt-3">
								<div class="clickable-row" data-href="/quest-black-knights-fortress">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Black_Knight_Quest_Complete.png"
											 style="max-height:150px;">
										<span class="text-info">
											Black Knights' Fortress
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-cooks-assistant">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Cooks_Assistant_Completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											Cook's Assistant
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-demon-slayer">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Demon_Slayer_completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											Demon Slayer
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-doric-quest">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Dorics_Quest_Completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											Doric's Quest
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>
							</div>

							<div id="row2" class="d-flex flex-wrap justify-content-between pt-3">
								<div class="clickable-row" data-href="/quest-dragon-slayer">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Dragon_Slayer_completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											Dragon slayer
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-ernest-the-chicken">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Ernest_Chicken_completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											Ernest the Chicken
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-goblin-diplomacy">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Goblin_completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											Goblin Diplomacy
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-imp-catcher">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Imp_Catcher_Completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											Imp Catcher
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>
							</div>

							<div id="row3" class="d-flex flex-wrap justify-content-between pt-3">
								<div class="clickable-row" data-href="/quest-the-knights-sword">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Knight's_Sword_completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											The Knight's Sword
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-pirates-treasure">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Pirates_Treasure_completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											Pirate's Treasure
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-prince-ali-rescue">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Prince_Ali_Rescue_completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											Prince Ali Rescue
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-the-restless-ghost">
									<span class="d-block">
										<img class="d-block" src="../img/quests/The_Restless_Ghost_Completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											The Restless Ghost
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>
							</div>

							<div id="row4" class="d-flex flex-wrap justify-content-between pt-3">
								<div class="clickable-row" data-href="/quest-romeo-and-juliet">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Romeo_Juliet_Completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											Romeo & Juliet
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-sheep-shearer">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Sheep_Shearer_Completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											Sheep Shearer
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-shield-of-arrav">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Shield_of_Arrav_completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											Shield of Arrav
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-vampire-slayer">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Vampire_Slayer_Completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											Vampire Slayer
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>
							</div>

							<div id="row5" class="d-flex flex-wrap justify-content-between pt-3">
								<div class="clickable-row" data-href="/quest-witchs-potion">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Betty_witch_potion.png"
											 style="max-height:150px;">
										<span class="text-info">
											Witch's potion
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>
							</div>

						</div>
						<!-- End F2P Quests -->

						<!-- Begin Members Quests -->
						<div id="members" class="stats pl-5 pr-5">
							<h3 class="text-info pt-3">Members Quests</h3>
							<div id="row1" class="d-flex flex-wrap justify-content-between pt-3">
								<div class="clickable-row" data-href="/quest-biohazard">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Biohazard_finish_8.png"
											 style="max-height:150px;">
										<span class="text-info">
											Biohazard
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-clock-tower">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Clock_tower_2.png"
											 style="max-height:150px;">
										<span class="text-info">
											Clock Tower
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-digsite">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Digsite_Completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											Digsite
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-druidic-ritual">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Druidic_Ritual_completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											Druidic Ritual
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>
							</div>

							<div id="row2" class="d-flex flex-wrap justify-content-between pt-3">
								<div class="clickable-row" data-href="/quest-dwarf-cannon">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Dwarf_cannon_finish.png"
											 style="max-height:150px;">
										<span class="text-info">
											Dwarf Cannon
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-family-crest">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Family_Crest_completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											Family Crest
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-fight-arena">
									<span class="d-block">
										<img class="d-block" src="../img/quests/FightArenaComplete.png"
											 style="max-height:150px;">
										<span class="text-info">
											Fight Arena
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-fishing-contest">
									<span class="d-block">
										<img class="d-block" src="../img/quests/FishConReward.png"
											 style="max-height:150px;">
										<span class="text-info">
											Fishing Contest
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>
							</div>

							<div id="row3" class="d-flex flex-wrap justify-content-between pt-3">
								<div class="clickable-row" data-href="/quest-the-grand-tree">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Grand_tree_completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											The Grand Tree
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-gertrudes-cat">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Gertude_Cat_Complete.png"
											 style="max-height:150px;">
										<span class="text-info">
											Gertrude's Cat
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-the-hazeel-cult">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Good_Hazeel_Complete.png"
											 style="max-height:150px;">
										<span class="text-info">
											The Hazeel Cult
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-heros-quest">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Heroes_finish.png"
											 style="max-height:150px;">
										<span class="text-info">
											Hero's Quest
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>
							</div>

							<div id="row4" class="d-flex flex-wrap justify-content-between pt-3">
								<div class="clickable-row" data-href="/quest-the-holy-grail">
									<span class="d-block">
										<img class="d-block" src="../img/quests/HolyGrailComplete.png"
											 style="max-height:150px;">
										<span class="text-info">
											The Holy Grail
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-jungle-potion">
									<span class="d-block">
										<img class="d-block" src="../img/quests/JunglePotionComplete.png"
											 style="max-height:150px;">
										<span class="text-info">
											Jungle Potion
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-legends-quest">
									<span class="d-block">
										<img class="d-block" src="../img/quests/LegendsQuestComplete.png"
											 style="max-height:150px;">
										<span class="text-info">
											Legend's Quest
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-lost-city">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Lost_City_completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											Lost City
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>
							</div>

							<div id="row5" class="d-flex flex-wrap justify-content-between pt-3">
								<div class="clickable-row" data-href="/quest-merlins-crystal">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Merlins_Crystal_completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											Merlin's Crystal
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-monks-friend">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Monk's_friend_end.png"
											 style="max-height:150px;">
										<span class="text-info">
											Monk's Friend
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-murder-mystery">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Murder_reward.png"
											 style="max-height:150px;">
										<span class="text-info">
											Murder Mystery
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-observatory-quest">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Observatory_completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											Observatory Quest
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>
							</div>

							<div id="row6" class="d-flex flex-wrap justify-content-between pt-3">
								<div class="clickable-row" data-href="/quest-plague-city">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Plague_completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											Plague City
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-scorpion-catcher">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Scorp_catcher_end.png"
											 style="max-height:150px;">
										<span class="text-info">
											Scorpion Catcher
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-sea-slug">
									<span class="d-block">
										<img class="d-block" src="../img/quests/SeaSlugComplete.png"
											 style="max-height:150px;">
										<span class="text-info">
											Sea Slug
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-sheep-herder">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Sheep_Herder_Completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											Sheep Herder
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>
							</div>

							<div id="row7" class="d-flex flex-wrap justify-content-between pt-3">
								<div class="clickable-row" data-href="/quest-shilo-village">
									<span class="d-block">
										<img class="d-block" src="../img/quests/ShiloVillageComplete.png"
											 style="max-height:150px;">
										<span class="text-info">
											Shilo Village
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-temple-of-ikov">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Temple_of_Ikov_Evil_-_Complete.png"
											 style="max-height:150px;">
										<span class="text-info">
											Temple of Ikov
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-tourist-trap">
									<span class="d-block">
										<img class="d-block" src="../img/quests/TouristTrapComplete.png"
											 style="max-height:150px;">
										<span class="text-info">
											Tourist Trap
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-tree-gnome-village">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Tree_Gnome_Village_completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											Tree Gnome Village
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>
							</div>

							<div id="row8" class="d-flex flex-wrap justify-content-between pt-3">
								<div class="clickable-row" data-href="/quest-tribal-totem">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Tribal_totem_5.png"
											 style="max-height:150px;">
										<span class="text-info">
											Tribal Totem
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-underground-pass">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Underground_completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											Underground Pass
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-watchtower">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Watchtower_other_rewards.png"
											 style="max-height:150px;">
										<span class="text-info">
											Watchtower
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>

								<div class="clickable-row" data-href="/quest-waterfall-quest">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Waterfall_Quest_Completed.png"
											 style="max-height:150px;">
										<span class="text-info">
											Waterfall Quest
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>
							</div>

							<div id="row9" class="d-flex flex-wrap justify-content-between pt-3">
								<div class="clickable-row" data-href="/quest-witches-house">
									<span class="d-block">
										<img class="d-block" src="../img/quests/Witches_Quest_end.png"
											 style="max-height:150px;">
										<span class="text-info">
											Witch's House
										</span>
									</span>
									<span class="d-block pb-3">
										Difficulty:
										<span class="small text-info font-weight-bold">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</span>
										<span class="small">
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
									</span>
								</div>
							</div>

						</div>
						<!-- End Members Quests -->

					</div>
				</div>

				<div class="text-center pt-5 pb-5">
					<a href="https://classic.runescape.wiki">A special thanks to the Runescape Classic Wiki for quest
						guides!</a>
				</div>

			</div>
		</div>
	</div>
</article>
