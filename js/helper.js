CHelp = window.prototype = {
	
	_cat_name : ["Necklaces" , "Earrings" , "Rings", "Pendants" , "Bracelets" ,"Bangles" ], // names of all categories,
	_our_story_img : ["img/our_story/Ramniklal_and_Sons_2_a.jpg" , "img/our_story/_SP_8572 Edit_OS.jpg"], // our story image array,
	_services_img : [ "img/services/img1.jpg", "img/services/img2.jpg" ],
	_homepage_img_arr : [ 
							"img/home/img01.jpg", 
							"img/home/img02.jpg", 
							"img/home/img03.jpg", 
							"img/home/img04.jpg", 
							"img/home/img05.jpg", 
							"img/home/img06.jpg", 
							"img/home/img07.jpg", 
							"img/home/img08.jpg", 
							"img/home/img09.jpg", 
							"img/home/img10.jpg", 
							"img/home/img11.jpg", 
							"img/home/img12.jpg" 
						],
				
	_category_details_arr : { 
				"Bracelets" : [
					{ "img" : [ "img/bracelets/BLI_1617.jpg" ], "text" : "BLI 1617 - Diamond and Yellow Sapphire Bracelet" },
					{ "img" : [ "img/bracelets/VVF_283_A.jpg" ], "text" : "VVF 283A - Ruby Bracelet and Diamond Clasp" },
					{ "img" : [ "img/bracelets/VVF_283_B.jpg" ], "text" : "VVF 283B - Pearl Bracelet and Diamond Clasp" },
					{ "img" : [ "/img/bracelets/VVF_286.jpg" ], "text" : "VVF 286 - Diamond and Topaz Bracelet" },
					{ "img" : [ "/img/bracelets/VVF_345.jpg" ], "text" : "VVF 345 - Diamond Bracelet" },
				] ,
				"Bangles" : [
					{ "img" : [ "img/bangles/BG_0130.jpg" , "img/bangles/BG_0130_SIDE.jpg" ], "text" : "BG 0130 - Diamond Bangle" },
					{ "img" : [ "img/bangles/BG_0143.jpg" , "img/bangles/BG_0143_SIDE.jpg" ], "text" : "BG 0143 -  Diamond Bangle" },
					{ "img" : [ "img/bangles/BL_0039.jpg" , "img/bangles/BL_0039_SIDE.jpg" ], "text" : "BL 0039 - Ruby and Diamond Bangle" },
					{ "img" : [ "img/bangles/BL_0139.jpg" , "img/bangles/BL_0139_SIDE.jpg" ], "text" : "BL 0139 - Ruby and Diamond Bangle" },
					{ "img" : [ "img/bangles/BL_0143.jpg" , "img/bangles/BL_0143_SIDE.jpg" ], "text" : "BL 0143 - Ruby and Diamond Bangle" },
					{ "img" : [ "img/bangles/BL_0240.jpg" , "img/bangles/BL_0240_SIDE.jpg" ], "text" : "BL 0240 - Diamond and Ruby Bangle" },
					{ "img" : [ "img/bangles/BL_0578.jpg" , "img/bangles/BL_0578_SIDE.jpg" ], "text" : "BL 0578 - Diamond Bangle" },
					{ "img" : [ "img/bangles/BL_0628.jpg" , "img/bangles/BL_0628_SIDE.jpg" ], "text" : "BL 0628 - Diamond Bangle" },
					{ "img" : [ "img/bangles/BRS_2.jpg" , "img/bangles/BRS_2_SIDE.jpg" ], "text" : "BRS 2 - Traditional Indian Bangle" },
					{ "img" : [ "img/bangles/BRS_4.jpg" ], "text" : "BRS 4 - Traditional Indian Bangle" },
					{ "img" : [ "img/bangles/BRS_5.jpg" , "img/bangles/BRS_5_SIDE.jpg" ], "text" : "BRS 5 - Traditional Indian Bangle" },
					{ "img" : [ "img/bangles/BRS_6.jpg" , "img/bangles/BRS_6_SIDE.jpg" ], "text" : "BRS 6 - Traditional Indian Bangle" },
					{ "img" : [ "img/bangles/BRS_7_SIDE.jpg" ], "text" : "BRS 7 - Traditional Indian Bangle" },
					{ "img" : [ "img/bangles/IB_030.jpg" , "img/bangles/IB_030_SIDE.jpg" ], "text" : "IB 030 - Diamond Bangle" }
				] ,
				"Pendants" : [
					{ "img" : [ "img/pendants/KTL_113_D.jpg" ], "text" : "KTL 113 D - Diamond and Sapphire Pendant" },
					{ "img" : [ "img/pendants/KTL_349_D.jpg" ], "text" : "KTL 349 D - Diamond Pendant" },
					{ "img" : [ "img/pendants/NB_2_E.jpg" ], "text" : "NB 2 E - Yellow Topaz and Diamond Pendant" },
					{ "img" : [ "img/pendants/P_1784_LMQWN.jpg" ], "text" : "P 1784 LMQWN - Yellow Topaz and Diamond Pendant" },
					{ "img" : [ "img/pendants/P_1991_GT.jpg" ], "text" : "P 1991 GT - Tsavorite, Pearl and Diamond Pendant" },
					{ "img" : [ "img/pendants/PN_11007.jpg" ], "text" : "PN11007 - Black Onyx and Diamond Pendant" },
					{ "img" : [ "img/pendants/PN_36329.jpg" ], "text" : "PN 36329 - Black Onyx and Diamond Pendant" },
					{ "img" : [ "img/pendants/PN_60646.jpg" ], "text" : "PN 60646 - Pink Coral and Diamond Pendant" },
					{ "img" : [ "img/pendants/S_1182.jpg" ], "text" : "S 1182 P - Pearl and Diamond Pendant" },
					{ "img" : [ "img/pendants/S_2631.jpg" ], "text" : "S 2631 - Pink Tourmaline and Diamond Pendant" },
					{ "img" : [ "img/pendants/S_3116.jpg" , "img/pendants/S_3116_SIDE.jpg" ], "text" : "S 3116 - Turquoise and Rose Diamond Pendant" },
					{ "img" : [ "img/pendants/VVF_265.jpg" ], "text" : "VVF 265 - Pink Tourmaline and Diamond Pendant" },
					{ "img" : [ "img/pendants/VVF_365.jpg" ], "text" : "VVF 365 - Traditional Indian Pendant" },
					{ "img" : [ "img/pendants/VVF_366.jpg" ], "text" : "VVF 366 - Traditional Indian Pendant" },
					{ "img" : [ "img/pendants/VVF_367.jpg" ], "text" : "VVF 367 - Traditional Indian Pendant" }
				] ,
				"Necklaces" : [
					{ "img" : [ "img/necklace/NL_34206.jpg" , "img/necklace/NL_34206_ZOOM.jpg" ], "text" : "NL 34206 - Black Onyx and Diamond Necklace" },
					{ "img" : [ "img/necklace/S_252.jpg" , "img/necklace/S_252_ZOOMy.jpg" ], "text" : "S 252 - Rose Diamond and Beads Necklace" },
					{ "img" : [ "img/necklace/VVF_199.jpg" , "img/necklace/VVF_199_ZOOM.jpg" ], "text" : "VVF 199 - Baguette Diamond Necklace" },
					{ "img" : [ "img/necklace/VVF_209.jpg" , "img/necklace/VVF_209_ZOOM.jpg" ], "text" : "VVF 209- Oval Diamond Necklace" },
					{ "img" : [ "img/necklace/VVF_238_SIDE.jpg" , "img/necklace/VVF_283.jpg" , "img/necklace/VVF_283_ZOOM.jpg" ], "text" : "VVF 283 - Pearl Necklace with a Diamond Clasp" },
					{ "img" : [ "img/necklace/VVF_316.jpg" , "img/necklace/VVF_316_ZOOM.jpg" ], "text" : "VVF 316 - Ruby and Diamond Necklace" },
					{ "img" : [ "img/necklace/VVF_322.jpg" , "img/necklace/VVF_322_ZOOM.jpg" ], "text" : "VVF 322 - Pink Tourmaline and Diamond Necklace" },
					{ "img" : [ "img/necklace/VVF_357.jpg" , "img/necklace/VVF_357_ZOOM.jpg" ], "text" : "VVF 357 - Traditional Indian Necklace" },
					{ "img" : [ "img/necklace/VVF_358.jpg" , "img/necklace/VVF_358_ZOOM.jpg" ], "text" : "VVF 358 - Traditional Indian Necklace" },
					{ "img" : [ "img/necklace/VVF_359.jpg" , "img/necklace/VVF_359_ZOOM.jpg" ], "text" : "VVF 359 - Traditional Indian Necklace" },
					{ "img" : [ "img/necklace/VVF_360.jpg" , "img/necklace/VVF_360_ZOOM.jpg" ], "text" : "VVF 360 - Traditional Indian Necklace" },
					{ "img" : [ "img/necklace/VVF_361.jpg" , "img/necklace/VVF_361_ZOOM.jpg" ], "text" : "VVF 361 - Traditional Indian Necklace" },
					{ "img" : [ "img/necklace/VVF_362.jpg" , "img/necklace/VVF_362_ZOOM.jpg" ], "text" : "VVF 362 - Traditional Indian Necklace" },
					{ "img" : [ "img/necklace/VVF_363.jpg" , "img/necklace/VVF_363_ZOOM.jpg" ], "text" : "VVF 363 - Traditional Indian Necklace" },
					{ "img" : [ "img/necklace/VVF_392.jpg" , "img/necklace/VVF_392_SIDE.jpg", "img/necklace/VVF_392_ZOOM.jpg" ], "text" : "VVF 392 - Emerald Beads Necklace with a Rose Diamond Clasp" }
				] ,
				"Earrings" : [
					{ "img" : [ "img/earings/E_2428_PNWN.jpg" ], "text" : "E 2428 PNWN - Diamond and Pink Tourmaline Earrings" },
					{ "img" : [ "img/earings/E_16360_EMWN.jpg" ], "text" : "E 16360 EMWN - Orange Chalcedony and Diamond Earrings" },
					{ "img" : [ "img/earings/S_915.jpg"  ], "text" : "S 915 - Diamond and Tahitian Pearl Earrings" },
					{ "img" : [ "img/earings/S_2808.jpg"  ], "text" : "S 2808 - Pink Tourmaline and Diamond Earrings" },
					{ "img" : [ "img/earings/S_3322.jpg"  ], "text" : "S 3322 - Yellow Sapphire and Diamond Earrings" },
					{ "img" : [ "img/earings/SE_0183.jpg" , "img/earings/SE_0183_SIDE.jpg"  ], "text" : "SE 0183 - Black Onyx and Diamond Earrings" },
					{ "img" : [ "img/earings/VVF_282.jpg"  ], "text" : "VVF 282 - Pink Sapphire, Diamond and Pearl Earrings" },
					{ "img" : [ "img/earings/VVF_287.jpg"  ], "text" : "VVF 287 - Turquoise, Topaz and Diamond Earrings" },
					{ "img" : [ "img/earings/VVF_290.jpg"  ], "text" : "VVF 290 - Diamond and Zambian Emerald Earrings" },
					{ "img" : [ "img/earings/VVF_300.jpg"  ], "text" : "VVF 300 - Mother of Pearl, Pink Sapphire, Rose and Round Diamond Earrings" },
					{ "img" : [ "img/earings/VVF_301.jpg"  ], "text" : "VVF 301 - Diamond and Aquamarine Earrings" },
					{ "img" : [ "img/earings/VVF_310.jpg"  ], "text" : "VVF 310 - Amethyst and Diamond Earrings" },
					{ "img" : [ "img/earings/VVF_314.jpg"  ], "text" : "VVF 314 - Ruby and Diamond Earrings" },
					{ "img" : [ "img/earings/VVF_317.jpg"  ], "text" : "VVF 317 - Ruby and Diamond Earrings" },
					{ "img" : [ "img/earings/VVF_319.jpg"  ], "text" : "VVF 319 - Diamond and Pearl Earrings" },
					{ "img" : [ "img/earings/VVF_321.jpg"  ], "text" : "VVF 321 - Ruby and Diamond Earrings" },
					{ "img" : [ "img/earings/VVF_323.jpg"  ], "text" : "VVF 323 - Pink Tourmaline and Diamond Earrings" },
					{ "img" : [ "img/earings/VVF_324.jpg"  ], "text" : "VVF 324 - Diamond Earrings" },
					{ "img" : [ "img/earings/VVF_328.jpg"  ], "text" : "VVF 328 - Ruby and Diamond Earrings" },
					{ "img" : [ "img/earings/VVF_330.jpg"  ], "text" : "VVF 330 - Pink Tourmaline and Diamond Earring" },
					{ "img" : [ "img/earings/VVF_336.jpg"  ], "text" : "VVF 336 - Diamond and Rose Cut Earrings" },
					{ "img" : [ "img/earings/VVF_339.jpg"  ], "text" : "VVF 339 - Diamond Earrings" },
					{ "img" : [ "img/earings/VVF_348.jpg"  ], "text" : "VVF 348 - Pink Tourmaline and Diamond Earrings" },
					{ "img" : [ "img/earings/VVF_349.jpg"  ], "text" : "VVF 349 - Traditional Indian Earrings" },
					{ "img" : [ "img/earings/VVF_350.jpg"  ], "text" : "VVF 350 - Traditional Indian Earrings" },
					{ "img" : [ "img/earings/VVF_351.jpg"  ], "text" : "VVF 351 - Traditional Indian Earrings" },
					{ "img" : [ "img/earings/VVF_352.jpg"  ], "text" : "VVF 352 - Traditional Indian Earrings" },
					{ "img" : [ "img/earings/VVF_353.jpg"  ], "text" : "VVF 353 - Traditional Indian Earrings" },
					{ "img" : [ "img/earings/VVF_354.jpg"  ], "text" : "VVF 354 - Traditional Indian Earrings" },
					{ "img" : [ "img/earings/VVF_355.jpg"  ], "text" : "VVF 355 - Traditional Indian Earrings" },
					{ "img" : [ "img/earings/VVF_368.jpg"  ], "text" : "VVF 368 - Traditional Indian Earrings" },
					{ "img" : [ "img/earings/VVF_369.jpg"  ], "text" : "VVF 369 - Traditional Indian Earrings" },
					{ "img" : [ "img/earings/BRS_8.jpg" , "img/earings/BRS_8_BACK.jpg"  ], "text" : "BRS 8  - Traditional Indian Earrings" }
	
				] ,
				"Rings" : [
					{ "img" : [ "img/rings/JBX_11234.JPG" , "img/rings/JBX_11234_SIDE1.JPG" , "img/rings/JBX_11234_SIDE2.JPG" ], "text" : "JBX 11234 - Diamond Ring" },
					{ "img" : [ "img/rings/JHE_176_S.JPG" , "img/rings/JHE_176_S_SIDE.JPG"  , "img/rings/JHE_176_S_SIDE2.JPG" ], "text" : "JHE 176 S - Diamond Solitaire Ring" },
					{ "img" : [ "img/rings/KTL257_B.JPG" , "img/rings/KTL257_B_SIDE.JPG" , "img/rings/KTL257_B_SIDE2.JPG" ], "text" : "KTL 257 B - Diamond Ring" },
					{ "img" : [ "img/rings/LR_0365.JPG" , "img/rings/LR_0365_SIDE.JPG" , "img/rings/LR_0365_SIDE2.JPG" ], "text" : "LR 0365 - Diamond Ring" },
					{ "img" : [ "img/rings/LR_1333SC.JPG" , "img/rings/LR_1333SC_SIDE.JPG" , "img/rings/LR_1333SC_SIDE2.JPG" ], "text" : "LR 1333 S C - Diamond Ring" },
					{ "img" : [ "img/rings/R_760RWN.JPG" , "img/rings/R_760RWN_SIDE.JPG" , "img/rings/R_760RWN_SIDE2.JPG" ], "text" : "R 760RWN - Ruby Ring" },
					{ "img" : [ "img/rings/R_3958_MSWN_2.JPG" , "img/rings/R_3958_MSWN_2_SIDE.JPG" , "img/rings/R_3958_MSWN_2_SIDE2.JPG" ], "text" : "R 3958 MSWN - Diamond and Sapphire Ring" },
					{ "img" : [ "img/rings/R_4252_D(2P).JPG" , "img/rings/R_4252_D(2P)_SIDE.JPG" , "img/rings/R_4252_D(2P)_SIDE2.JPG" ], "text" : "R 4252 D(P2) - Diamond Ring" },
					{ "img" : [ "img/rings/R_4374_D_(2P).JPG" , "img/rings/R_4374_D_(2P)_SIDE.JPG" , "img/rings/R_4374_D_(2P)_SIDE2.JPG" ], "text" : "R 4374 D(2P) - Diamond Ring" },
					{ "img" : [ "img/rings/R_4376_D_(2T).JPG" , "img/rings/R_4376_D_(2T)_SIDE.JPG" , "img/rings/R_4376_D_(2T)_SIDE2.JPG" ], "text" : "R 4376 D(2T) - Diamond Ring" },
					{ "img" : [ "img/rings/R_4597_SMQ(P).JPG" , "img/rings/R_4597_SMQ(P)_SIDE.JPG" , "img/rings/R_4597_SMQ(P)_SIDE2.JPG" ], "text" : "R 4597 SMQ(P - Smoky Topaz and Diamond Ring" },
					{ "img" : [ "img/rings/R_4614MSWN_2.JPG" , "img/rings/R_4614MSWN_2_SIDE.JPG" , "img/rings/R_4614MSWN_2_SIDE2.JPG" ], "text" : "R 4614 MSWN - Diamond and Sapphire Ring" },
					{ "img" : [ "img/rings/R_4787_D(2P).JPG" , "img/rings/R_4787_D(2P)_SIDE.JPG" , "img/rings/R_4787_D(2P)_SIDE2.JPG" ], "text" : "R 4787 D(2P) - Diamond Ring" },
					{ "img" : [ "img/rings/R_4801_D(P).JPg" , "img/rings/R_4801_D(P)_SIDE.JPG" , "img/rings/R_4801_D(P)_SIDE2.JPG" ], "text" : "R 4801 D(2P) - Diamond Ring" },
					{ "img" : [ "img/rings/R_4833DWN_2.JPG" , "img/rings/R_4833DWN_2_SIDE.JPG" , "img/rings/R_4833DWN_2_SIDE2.JPG" ], "text" : "R 4833 DWN - Diamond Ring" },
					{ "img" : [ "img/rings/R_4923_GT.JPG" , "img/rings/R_4923_GT_SIDE.JPG" , "img/rings/R_4923_GT_SIDE2.JPG" ], "text" : "R 4923 GT - Tsavorite and Diamond Ring" },
					{ "img" : [ "img/rings/R_5483ONWN.JPG" , "img/rings/R_5483ONWN_SIDE.JPG" ], "text" : "VR 5483 ONWN - Black Onyx and Diamond Ring" },
					{ "img" : [ "img/rings/R_18012_D(P).JPG" , "img/rings/R_18012_D(P)_SIDE.JPG" , "img/rings/R_18012_D(P)_SIDE2.JPG" ], "text" : "R 18012 D(P) - Diamond Ring" },
					{ "img" : [ "img/rings/R_59854.JPG" , "img/rings/R_59854_SIDE.JPG" , "img/rings/R_59854_SIDE2.JPG" ], "text" : "R 59854 - Diamond, Coral and Pink Sapphire Ring" },
					{ "img" : [ "img/rings/RG_7865.JPG" , "img/rings/RG_7865_SIDE.JPG" , "img/rings/RG_7865_SIDE2.JPG" ], "text" : "RG 7865 - Diamond Ring" },
					{ "img" : [ "img/rings/RG_48912.JPG" , "img/rings/RG_48912_SIDE.JPG" , "img/rings/RG_48912_SIDE2.JPG" ], "text" : "RG 48912 - Diamond Ring" },
					{ "img" : [ "img/rings/RG_54922.JPG" , "img/rings/RG_54922_SIDE.JPG" , "img/rings/RG_54922_SIDE2.JPG" ], "text" : "RG 54922 - Diamond and Coral Ring" },
					{ "img" : [ "img/rings/RG_55000.JPG" , "img/rings/RG_55000_SIDE.JPG" , "img/rings/RG_55000_SIDE2.JPG" ], "text" : "RG 55000 - Diamond, Coral and Yellow Sapphire Ring" },
					{ "img" : [ "img/rings/RG_56849.JPG" , "img/rings/RG_56849_SIDE.JPG" , "img/rings/RG_56849_SIDE2.JPG" ], "text" : "RG 56849 - Diamond Ring" },
					{ "img" : [ "img/rings/S_3030.JPG" , "img/rings/S_3030_SIDE.JPG" ], "text" : "S 3030 - Diamond Ring" },
					{ "img" : [ "img/rings/S_3181.JPG" , "img/rings/S_3181_SIDE.JPG" , "img/rings/S_3181_SIDE2.JPG" ], "text" : "S 3181 - Emerald and Diamond Ring" },
					{ "img" : [ "img/rings/S_3424.JPG" , "img/rings/S_3424_SIDE.JPG" , "img/rings/S_3424_SIDE2.JPG" ], "text" : "S 3424 - Diamond and Sapphire Ring" },
					{ "img" : [ "img/rings/S_3456.JPG" , "img/rings/S_3456_SIDE.JPG" ], "text" : "VVF 283B" },
					{ "img" : [ "img/rings/S_3553.JPG" , "img/rings/S_3553_SIDE.JPG" , "img/rings/S_3553_SIDE2.JPG" ], "text" : "S 3456 - Diamond Ring" },
					{ "img" : [ "img/rings/SRR_58606.JPG" , "img/rings/SRR_58606_SIDE.JPG" , "img/rings/SRR_58606_SIDE2.JPG" ], "text" : "SRR 58606 - Diamond Ring" },
					{ "img" : [ "img/rings/TM_2638.JPG" , "img/rings/TM_2638_SIDE.JPG" ], "text" : "TM 2638 - Diamond Ring" },
					{ "img" : [ "img/rings/VVF_12.JPG" , "img/rings/VVF_12_SIDE.JPG" ], "text" : "VVF 12 - Diamond Ring" },
					{ "img" : [ "img/rings/VVF_208.JPG" , "img/rings/VVF_208_SIDE.JPG" , "img/rings/VVF_208_SIDE2.JPG" ], "text" : "VVF 208 - Diamond Ring" },
					{ "img" : [ "img/rings/VVF_251.JPG" , "img/rings/VVF_251_SIDE.JPG" , "img/rings/VVF_251_SIDE2.JPG" ], "text" : "VVF 251 - Diamond Ring" },
					{ "img" : [ "img/rings/VVF_264.JPG" , "img/rings/VVF_264_SIDE.JPG" , "img/rings/VVF_264_SIDE2.JPG" ], "text" : "VVF 264 - Diamond and Pink Tourmaline Ring" },
					{ "img" : [ "img/rings/VVF_267.JPG" , "img/rings/VVF_267_1_SIDE.JPG" , "img/rings/VVF_267_1_SIDE2.JPG" ], "text" : "VVF 267 - Diamond and Zambian Emerald Ring" },
					{ "img" : [ "img/rings/VVF_272.JPG" , "img/rings/VVF_272_SIDE.JPG" , "img/rings/VVF_272_SIDE2.JPG" ], "text" : "VVF 272 - Diamond and Zambian Emerald Ring" },
					{ "img" : [ "img/rings/VVF_297.JPG" , "img/rings/VVF_297_SIDE.JPG" , "img/rings/VVF_297_SIDE2.JPG" ], "text" : "VVF 297 - Diamond Ring" },
					{ "img" : [ "img/rings/VVF_298.JPG" , "img/rings/VVF_298_SIDE.JPG" , "img/rings/VVF_298_SIDE2.JPG" ], "text" : "VVF 298 - Pearl and Diamond Ring" },
					{ "img" : [ "img/rings/VVF_326.JPG" , "img/rings/VVF_326_SIDE.JPG" , "img/rings/VVF_326_SIDE2.JPG" ], "text" : "VVVF 326 - Pink Tourmaline and Diamond Ring" },
					{ "img" : [ "img/rings/VVF_329.JPG" , "img/rings/VVF_329_SIDE.JPG" , "img/rings/VVF_329_SIDE2.JPG" ], "text" : "VVF 329 - Ruby and Diamond Ring" },
					{ "img" : [ "img/rings/VVF_335.JPG" , "img/rings/VVF_335_SIDE.JPG" , "img/rings/VVF_335_SIDE2.JPG" ], "text" : "VVF 335 - Diamond and Ruby Ring" },
					{ "img" : [ "img/rings/VVF_395.JPG" , "img/rings/VVF_395_SIDE.JPG" , "img/rings/VVF_395_SIDE2.JPG" ], "text" : "VVF 395 - Pink Tourmaline, Turquoise, Diamond and Tanzanite Ring" },
					{ "img" : [ "img/rings/VVF_396.JPG" , "img/rings/VVF_396_SIDE.JPG" , "img/rings/VVF_396_SIDE2.JPG" ], "text" : "VVF 396 - Diamond, Sapphire, Ruby and Pearl Ring" },
				]
	},
	
	_our_story_desc_arr : {
			"img/our_story/Ramniklal_and_Sons_2_a.jpg" : "<p style='font-weight:bold;'>History</p><p>1930's<br>A Gold smith in the early 1930's, our founder Ramniklal Soni paved the way for various ventures.</p><p>1940's<br>Ramniklal Brothers Jewellers (Aden, Yemen) a dealership for Swiss watches and fine Jewellery, relocated to Mumbai in the 1980's.</p><p>1960's<br>Hala Jewellers was founded in Kuwait City. This renowned gold and diamond jewellery retail store was situated in the Gold Souk and was imminently popular amongst the royal families of the Gulf region. However, the store closed down during the Gulf war, after which the focus shifted towards the Indian market.</p><p>1980's<br>Gem Art was established during the 1980's and was well known as one of the first Indian importers of Italian Gold Jewellery. In addition to this, the use of Swiss machinery enabled recognition for excellent craftsmanship and finesse in the manufacturing of gold bangles in particular.</p><p>1987<br>Ramniklal& Sons Jewellers (Mumbai) was founded.</p>",
			
			"img/our_story/_SP_8572 Edit_OS.jpg" : "<p style='font-weight:bold;'>About Us</p><p>Modelled after the original store established in the port city of Aden during the early 1940's Ramniklal & Sons (Mumbai) has become a heritage boutique that showcases exclusive diamond & gemstone jewellery. </p><p>Over the last 74 years, Ramniklal & Sons Jewellers has developed into a Jewellery house known for its unique designs, rare gemstones and excellent finish.</p><p>In recent years we have ventured into the wholesale Indian jewellery market as a direct vendor for many larger jewellery houses.</p>",
	},
	
	_services_desc_arr : {
			"img/services/img1.jpg" : "<p style='font-weight:bold;'>In - Store Services</p><div>Jewellery retail & wholesale</div><div>Gemstone & bullion investment</div><div>Jewellery & gemstone valuations</div><div>Jewellery & design advisors</div>",
			"img/services/img2.jpg" : "<p style='font-weight:bold;'>Other services offered</p><div>Custom orders (Jewellery)</div><div>Jewellery inspection</div><div>Polishing & Cleaning</div><div>Engraving</div><div>Re-sizing</div><div>Certification</div>"
	},

	scroll_category_desc : function(direction) // change the text and image of specific category
	{
		var catname = $('#cat_name').text();
		
		var item_length = CHelp._category_details_arr[ catname ].length;
		var next_idx = 0;
		
		var current_item_desc = $("#category_desc_cont").html();
		var current_idx = CHelp.get_current_idx_from_desc( CHelp._category_details_arr[ catname ], current_item_desc.trim() );
		
		if( current_idx >= 0 )
		{
			if(direction == 'next')
			{
				if( current_idx == ( item_length - 1 ) )
				{
					next_idx = 0;
				}
				else
				{
					next_idx = current_idx + 1;
				}
					
			}
			else
			{
				if( current_idx == 0 )
				{
					next_idx = ( item_length - 1 );
				}
				else
					next_idx = current_idx - 1;
			}
		}
		
		
		var total_height = 0;
		var new_item_img_arr = CHelp._category_details_arr[ catname ][ next_idx ][ 'img' ];
		
		$( "#cat_img1" ).hide();
		$( "#cat_img2" ).hide();
		
		for( var i = 0; i < new_item_img_arr.length; i++ )
		{
			$( "#cat_img" + i ).attr( "src" , new_item_img_arr[ i ] ).show();
			total_height = total_height + 409;
		}
		
		$( "#cat_large_left_arr_container" ).css( "height", total_height + "px" );
		$( "#cat_img_container" ).css( "height", total_height + "px" );
		$( "#cat_large_right_arr_container" ).css( "height", total_height + "px" );
		
		
		$( "#main_content_container" ).css( "height", ( total_height + 80 ) + "px" );
		$( "#cat_container" ).css( "height", ( total_height + 50 ) + "px" );
		$( "#cat_content" ).css( "height", ( total_height + 50 ) + "px" );
		
		
		var next_category_item_desc = CHelp._category_details_arr[ catname ][ next_idx ][ 'text' ]; 
		$("#category_desc_cont").html( next_category_item_desc );
	 	
	},

	scroll_category_name : function(direction)
	{
		/* var catname = $('#cat_name').text();

		var img_src = $('#cat_img').attr('src');
		var item_length = CHelp._category_details_arr[ catname ].length;
		var next_idx = 0;
		
		var current_item_desc = $("#cat_info_bar").html();
		
		var current_idx = CHelp.get_current_idx_from_desc( CHelp._category_details_arr[ catname ], current_item_desc.trim() );
		
		if( current_idx >= 0 )
		{
			if(direction == 'next')
			{
				if( current_idx == ( item_length - 1 ) )
				{
					next_idx = 0;
				}
				else
					next_idx = current_idx + 1;
			}
			else
			{
				if( current_idx == 0 )
				{
					next_idx = ( item_length - 1 );
				}
				else
					next_idx = current_idx - 1;
			}
		}
		
		
		var new_item_img_arr = CHelp._category_details_arr[ catname ][ next_idx ][ 'img' ];
		
		// TODO: put this in method
		$( "#cat_img1" ).hide();
		$( "#cat_img2" ).hide();
		
		for( var i = 0; i < new_item_img_arr.length; i++ )
		{
			$( "#cat_img" + i ).attr( "src" , new_item_img_arr[ i ] ).show();
		}
		
		var new_item_desc = CHelp._category_details_arr[ catname ][ next_idx ][ 'text' ];
		$("#cat_info_bar").html( new_item_desc ); */
		
		
		
		var catname = $('#cat_name').text();
		var total_height = 0;
		
		var curr_cat_index = CHelp._cat_name.indexOf(catname);
		var next_category = (direction == 'next') ? ( ( curr_cat_index == CHelp._cat_name.length - 1  ) ? ( CHelp._cat_name[ 0 ] ) : ( CHelp._cat_name[ ( curr_cat_index + 1 ) ] )  ) : ( ( curr_cat_index == 0 ) ? ( CHelp._cat_name[ ( CHelp._cat_name.length - 1 ) ] ) : ( CHelp._cat_name[ ( curr_cat_index - 1 ) ] ) );
		
		$('#cat_name').html(next_category);
		
		var image_array = CHelp._category_details_arr[ next_category ][ 0 ][ 'img' ];
		
		$( "#cat_img1" ).hide();
		$( "#cat_img2" ).hide();
		
		for( var i = 0; i < image_array.length; i++ )
		{
			$( "#cat_img" + i ).attr( "src" , image_array[ i ] ).show();
			total_height = total_height + 409;
		}
		
		$( "#cat_large_left_arr_container" ).css( "height", total_height + "px" );
		$( "#cat_img_container" ).css( "height", total_height + "px" );
		$( "#cat_large_right_arr_container" ).css( "height", total_height + "px" );
		
		
		$( "#main_content_container" ).css( "height", ( total_height + 80 ) + "px" );
		$( "#cat_container" ).css( "height", ( total_height + 50 ) + "px" );
		$( "#cat_content" ).css( "height", ( total_height + 50 ) + "px" );
		
		var next_category_item_desc = CHelp._category_details_arr[ next_category ][ 0 ][ 'text' ]; 
		$("#category_desc_cont").html( next_category_item_desc );
		
		
		/* var catname = $('#cat_name').text();
		
		var curr_cat_index = CHelp._cat_name.indexOf(catname);
		var next_category = (direction == 'next') ? ( ( curr_cat_index == CHelp._cat_name.length - 1  ) ? ( CHelp._cat_name[ 0 ] ) : ( CHelp._cat_name[ ( curr_cat_index + 1 ) ] )  ) : ( ( curr_cat_index == 0 ) ? ( CHelp._cat_name[ ( CHelp._cat_name.length - 1 ) ] ) : ( CHelp._cat_name[ ( curr_cat_index - 1 ) ] ) );
		
		$('#cat_name').html(next_category);
		
		var image_array = CHelp._category_details_arr[ next_category ][ 0 ][ 'img' ];
		
		$( "#cat_img1" ).hide();
		$( "#cat_img2" ).hide();
		
		for( var i = 0; i < image_array.length; i++ )
		{
			$( "#cat_img" + i ).attr( "src" , image_array[ i ] ).show();
		}
		
		var next_category_item_desc = CHelp._category_details_arr[ next_category ][ 0 ][ 'text' ]; 
		$("#cat_info_bar").html( next_category_item_desc ); */
		
		
	},
	
	show_cat_details : function(catname)
	{
		var total_height = 0;
		
		var curr_cat_index = CHelp._cat_name.indexOf(catname);
		
		$('#cat_name').html(catname);
		
		var image_array = CHelp._category_details_arr[ catname ][ 0 ][ 'img' ];
		
		
		$( "#cat_img1" ).hide();
		$( "#cat_img2" ).hide();
		
		for( var i = 0; i < image_array.length; i++ )
		{
			$( "#cat_img" + i ).attr( "src" , image_array[ i ] ).show();
			total_height = total_height + 409;
		}
		
		$( "#cat_large_left_arr_container" ).css( "height", total_height + "px" );
		$( "#cat_img_container" ).css( "height", total_height + "px" );
		$( "#cat_large_right_arr_container" ).css( "height", total_height + "px" );
		
		
		$( "#main_content_container" ).css( "height", ( total_height + 80 ) + "px" );
		$( "#cat_container" ).css( "height", ( total_height + 50 ) + "px" );
		$( "#cat_content" ).css( "height", ( total_height + 50 ) + "px" );
		
		var curr_category_item_desc = CHelp._category_details_arr[ curr_cat_index ][ 0 ][ 'text' ]; 
		$("#category_desc_cont").html( next_category_item_desc );
		 
		
		/* var catname = $('#cat_name').text();
		
		var curr_cat_index = CHelp._cat_name.indexOf(catname);
		var next_category = (direction == 'next') ? ( ( curr_cat_index == CHelp._cat_name.length - 1  ) ? ( CHelp._cat_name[ 0 ] ) : ( CHelp._cat_name[ ( curr_cat_index + 1 ) ] )  ) : ( ( curr_cat_index == 0 ) ? ( CHelp._cat_name[ ( CHelp._cat_name.length - 1 ) ] ) : ( CHelp._cat_name[ ( curr_cat_index - 1 ) ] ) );
		
		$('#cat_name').html(next_category);
		
		var image_array = CHelp._category_details_arr[ next_category ][ 0 ][ 'img' ];
		
		$( "#cat_img1" ).hide();
		$( "#cat_img2" ).hide();
		
		for( var i = 0; i < image_array.length; i++ )
		{
			$( "#cat_img" + i ).attr( "src" , image_array[ i ] ).show();
		}
		
		var next_category_item_desc = CHelp._category_details_arr[ next_category ][ 0 ][ 'text' ]; 
		$("#cat_info_bar").html( next_category_item_desc ); */
		
		
	},
	
	
	get_current_idx_from_desc : function( arr, chk_desc )
	{	
		for( var i = 0; i < arr.length; i++ )
		{
			var arr_desc = arr[ i ][ 'text' ];
			
			if( arr_desc == chk_desc )
			{
				return i;
			}
		}
		return -1;
	},
	
	navigate_pg_slider : function( direction, page )
	{
		if( page == "our_story" )
		{
			main_content_img = $("#os_main_content_img");
			img_array = CHelp._our_story_img;
			desc_array = CHelp._our_story_desc_arr;
			main_content = $("#os_main_content");
		}
		else
		{
			main_content_img = $("#serv_main_content_img");
			img_array = CHelp._services_img;
			desc_array = CHelp._services_desc_arr;
			main_content = $("#serv_main_content");
		}
		
		var curr_img_src = $(main_content_img).find('img').attr('src');
		var curr_idx = img_array.indexOf(curr_img_src);
		
		var next_idx = ( ( direction == 'prev' ) ? ( ( curr_idx == 0 ) ? ( img_array.length - 1 ) : ( curr_idx - 1 ) ) : ( ( curr_idx == ( img_array.length - 1 ) ) ? ( 0 ) : ( curr_idx + 1 ) ) );
		
		var next_img_src = img_array[ next_idx ];
		
		var next_desc = desc_array[ next_img_src ];
		
		$(main_content_img).find('img').attr( 'src', next_img_src );
		$(main_content).html( next_desc );
	},
	
	get_current_date: function(type)
	{
		var today = new Date();
		var dd = CHelp.format_number_digits( today.getDate() );
		var mm = CHelp.format_number_digits( today.getMonth()+1 ); //January is 0!
		var yyyy = CHelp.format_number_digits( today.getFullYear() );
		var hh = CHelp.format_number_digits( today.getHours() );
		var min = CHelp.format_number_digits( today.getMinutes() );
		
		curr_date_time = ( ( type == 'date' ) ? ( dd+'-'+mm+'-'+yyyy ) : ( hh + ":" + min ) );
		
		return curr_date_time;
		
	},
	
	compare_date : function( date1, date2 ) // dates should be in the format dd-mm-yy | returns false if first date is greater than second
	{
		var current_full_date = new Date( date1.replace( /(\d{2})-(\d{2})-(\d{4})/, "$2/$1/$3") );
		var chk_full_date = new Date( date2.replace( /(\d{2})-(\d{2})-(\d{4})/, "$2/$1/$3") );
		
		return ( ( current_full_date > chk_full_date ) ? ( false ) : ( true ) );
	},
	
	format_number_digits: function( num ) // appends 0 if number is 1 digit else returns number
	{
		/* if( num <= 9 && num >= 0 )
		{
			return "" + num
		} */
		return ( ( num <= 9 && num >= 0 ) ? ( "0" + num ) : ( num ) );
	}
	
}
