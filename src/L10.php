<?php namespace almaz44\light\calculator;
//
/**
 * Created by PhpStorm.
 * User: Andrii
 * Date: 06.06.2017
 * Time: 23:55
 */

// Оперативные стоимости. -----------------------------------------------
// 1. Ежедневные. 4-12(B-F)
const L10_C6_Dollar = 28; // доллар
const L10_C7_Euro = 32; // евро

const L10_C9_BenzinL = 26; // бензин 1 л
const L10_C10_Dizel = 26; // дизель 1 л
const L10_C11_Gaz = 15; // газ 1 л

// 2. Ежемесячные. 15-16(B-F)
const L10_C23_DvpWhite3mm = 250; // двп белое 3 мм, 2.85*2.07 м
const L10_C24_CatDvp = 6; // раскрой двп, 1 мп

const L10_C27_ProfilCD05 = 54; // профиль CD  0.5 мм, 3 мп
const L10_C28_Samorez19 = 0.3; // саморез 19 мм, цинк, бур
const L10_C29_Truba2020Black = 28; // труба 20*20 мм, черн., 1 мп
const L10_C30_Truba2020Al = 43; // труба 20*20*1.5 мм, AL, 1 мп
const L10_C31_PlankDer25x15mm = 6; // планка дерево 25*15 мм, 1 мп

const L10_C33_Paint = 100; // аэрозоль краска, 0,5 л

const L10_C36_CabelCu = 8; // кабель, медь, 1 мм2 (13 А)

const L10_C40_RitramaPrint = 100; // Ritrama печать 1 м2, 720 dpi

const L10_C43_LazporezAkril3mm1mp = 12; // лазер порезка акрила 3 мм, 1 мп
const L10_C44_PlotterCut = 1.7; // плоттерная порезка, 1 мп

const L10_C48_KartonGofro = 25; // гофро картон, 4 мм, 1 м2
const L10_C49_Streich20mkm = 160; // стрейч 20 мкм, 300 м*0.5 м
const L10_C50_Scotch20050 = 35; // скотч клей, 200 м*50 мм

// 3. Коэфициенты организации. 65-110(B-F)
const L10_C67_K1 = 0.8;
const L10_C68_K2 = 30;
const L10_C69_K3 = 10;
const L10_C70_K4 = 15;
const L10_C71_K5 = 5;
const L10_C72_K6 = 2;
const L10_C73_K7 = 20;
const L10_C74_K8 = 10;

// 4. Листовые материалы. 4-110(I-Q)
define('L10_J6_Plikarb4S_', 4.69 * L10_C7_Euro);
const L10_J6_Plikarb4S = L10_J6_Plikarb4S_; // поликарбонат 4 (стоимость)
const L10_K6_Plikarb4T = 4; // поликарбонат 4 (толщина)
const L10_L6_Plikarb4P = 0.8; // поликарбонат 4 (плотность)

define('L10_J7_Plikarb6S_', 7.47 * L10_C7_Euro);
const L10_J7_Plikarb6S = L10_J7_Plikarb6S_; // поликарбонат 6 (стоимость)
const L10_K7_Plikarb6T = 6; // поликарбонат 6 (толщина)
const L10_L7_Plikarb6P = 1.3; // поликарбонат 6 (плотность)

const L10_K8_Plikarb8T = 8; // поликарбонат 8 (толщина)

define('L10_J14_AkrilM2S_', 10.2 * L10_C7_Euro);
const L10_J14_AkrilM2S = L10_J14_AkrilM2S_; // акрил мол 2 (стоимость)
const L10_K14_AkrilM2T = 2; // акрил мол 2 (толщина)
const L10_L14_AkrilM2P = 2.4; // акрил мол 2 (плотность)

define('L10_J15_AkrilM3S_', 17.8 * L10_C7_Euro);
const L10_J15_AkrilM3S = L10_J15_AkrilM3S_; // акрил мол 3 (стоимость)
const L10_K15_AkrilM3T = 3; // акрил мол 3 (толщина)
const L10_L15_AkrilM3P = 3.6; // акрил мол 3 (плотность)

define('L10_J23_PVH_3mmS_', 4.6 * L10_C7_Euro);
const L10_J23_PVH_3mmS = L10_J23_PVH_3mmS_; // пвх 3 мм (стоимость)
const L10_K23_PVH_3mmT = 3; // пвх 3 мм (толщина)
const L10_L23_PVH_3mmP = 1.8; // пвх 3 мм (плотность)

define('L10_J24_PVH_4mmS_', 6.1 * L10_C7_Euro);
const L10_J24_PVH_4mmS = L10_J24_PVH_4mmS_; // пвх 4 мм (стоимость)
const L10_K24_PVH_4mmT = 4; // пвх 4 мм (толщина)
const L10_L24_PVH_4mmP = 2.4; // пвх 4 мм (плотность)

define('L10_J25_PVH_5mmS_', 7.5 * L10_C7_Euro);
const L10_J25_PVH_5mmS = L10_J25_PVH_5mmS_; // пвх 5 мм (стоимость)
const L10_K25_PVH_5mmT = 5; // пвх 5 мм (толщина)
const L10_L25_PVH_5mmP = 3; // пвх 5 мм (плотность)

define('L10_J28_DVPWhiteS_', L10_C23_DvpWhite3mm / 5.9);
const L10_J28_DVPWhiteS = L10_J28_DVPWhiteS_; // двп белое (стоимость)
const L10_K28_DVPWhiteT = 3; // двп белое (толщина)
const L10_L28_DVPWhiteP = 2.3; // двп белое (плотность)

const L10_J40_RaskrAkrlLazS = L10_C43_LazporezAkril3mm1mp; // раскрой акрила, лазер (стоимость)
const L10_J44_RaskrDVPS = L10_C24_CatDvp; // раскрой двп (стоимость)

// 5. Клеи, ЛКМ. 115-130(I-Q)
define('L10_J117_CosmofenPlusPVH_200mlSsht_', 3.1 * L10_C7_Euro);
const L10_J117_CosmofenPlusPVH_200mlSsht = L10_J117_CosmofenPlusPVH_200mlSsht_; // Cosmofen + (пвх), 200 мл (стоимость 1 шт/уп, грн)
define('L10_K117_CosmofenPlusPVH_200mlSmp_', L10_J117_CosmofenPlusPVH_200mlSsht / 35);
const L10_K117_CosmofenPlusPVH_200mlSmp = L10_K117_CosmofenPlusPVH_200mlSmp_; // Cosmofen + (пвх), 200 мл (стоимость 1 мп шва, грн)

define('L10_J123_Silicon_300mlSsht_', L10_C6_Dollar * 2);
const L10_J123_Silicon_300mlSsht = L10_J123_Silicon_300mlSsht_; // силикон, 300 мл (стоимость 1 шт/уп, грн)

define('L10_J124_Fixit_1up_300mlSsht_', 7.3 * L10_C6_Dollar);
const L10_J124_Fixit_1up_300mlSsht = L10_J124_Fixit_1up_300mlSsht_; // Fix-it, 1 уп, 300 мл (стоимость 1 шт/уп, грн)
define('L10_K124_Fixit_1up_300mlSmp_', L10_J124_Fixit_1up_300mlSsht / 25);
const L10_K124_Fixit_1up_300mlSmp = L10_K124_Fixit_1up_300mlSmp_; // Fix-it, 1 уп, 300 мл (стоимость 1 мп шва, грн)

const L10_J128_KraskaPF112_1lSsht = L10_C33_Paint; // краска пф 112, 1 л (стоимость 1 шт/уп, грн)

// 6. Плёнки. 4-70(T-AB)
const L10_U6_Ritrama_720dpi = L10_C40_RitramaPrint; // Ritrama 720 dpi
define('L10_U7_RitramaPhoto_', L10_U6_Ritrama_720dpi * 1.16);
const L10_U7_RitramaPhoto = L10_U7_RitramaPhoto_; // Ritrama фото
define('L10_U8_RitramaLaminat_', L10_U6_Ritrama_720dpi * 0.82);
const L10_U8_RitramaLaminat = L10_U8_RitramaLaminat_; // Ritrama ламинат

define('L10_U12_RitramaM300E_', 2.17 * L10_C7_Euro);
const L10_U12_RitramaM300E = L10_U12_RitramaM300E_; // Ritrama M300 (эконом)
const L10_U13_RitramaTRLSK = 2.65; // Ritrama TRL (свет, коэф.)
define('L10_U14_Oracal641_', 2.38 * L10_C7_Euro);
const L10_U14_Oracal641 = L10_U14_Oracal641_; // Oracal641
const L10_U15_Oracal8500SK = 3.1; // Oracal 8500 (свет, коэф.)

define('L10_U25_AssemblyFilm_', 1.26 * L10_C7_Euro);
const L10_U25_AssemblyFilm = L10_U25_AssemblyFilm_; // монтажная пленка

const L10_U27_PlotterCutLexx = L10_C44_PlotterCut; // плоттер порезка, Lexx

// 7. Упакова. 75-110(T-AB)
define('L10_U77_PlenkaStrech_20mkm_1m2_', L10_C49_Streich20mkm / 150);
const L10_U77_PlenkaStrech_20mkm_1m2 = L10_U77_PlenkaStrech_20mkm_1m2_; // пленка стрейч 20 мкм, 1 м2

define('L10_U81_SkotchChinese_1mp_', L10_C50_Scotch20050 / 200);
const L10_U81_SkotchChinese_1mp = L10_U81_SkotchChinese_1mp_; // скотч "китайский", 1 мп

const L10_U85_GofroCardboard_4mm = L10_C48_KartonGofro; // гофрокартон 4 мм

const L10_U92_PlankUpakDer25x15 = L10_C31_PlankDer25x15mm; // планка "упак" дерево 25*15 (1 м2/мп, грн)
const L10_V92_PlankUpakDer25x15 = 0.17; // планка "упак" дерево 25*15

define('L10_U97DVPUpak_', 0.52 * L10_J28_DVPWhiteS);
const L10_U97DVPUpak = L10_U97DVPUpak_; // двп упаковочное (1 м2/мп, грн)
define('L10_V97DVPUpak_', L10_L28_DVPWhiteP / 2.1);
const L10_V97DVPUpak = L10_V97DVPUpak_; // двп упаковочное (1 м2/мп, грн)

// 8. Транспорт. 115-130(T-AB)
define('L10_U120Gaz1DostKNPgrn100_', 8 * L10_C10_Dizel);
const L10_U120Gaz1DostKNPgrn100 = L10_U120Gaz1DostKNPgrn100_; // "Газель" 1 доставка к НП (грн/100 км)
const L10_U121Doblo1DostKNPgrn100 = 0.15; // "Добло" 1 доставка к НП (грн/100 км)
const L10_V122GazProbeg = 23; // "Газель" пробег
define('L10_U122GazProbeg_', L10_V122GazProbeg * L10_C10_Dizel);
const L10_U122GazProbeg = L10_U122GazProbeg_; // "Газель" пробег (грн/100 км)
const L10_V123DobloProbeg = 10; // "Добло" пробег
define('L10_U123DobloProbeg_', L10_V123DobloProbeg * L10_C10_Dizel);
const L10_U123DobloProbeg = L10_U123DobloProbeg_; // "Газель" пробег (грн/100 км)

const L10_U127MaxEmkDoblom3 = 8; // мах емкость "Газель", м3
const L10_U128MaxEmkGazm3 = 2; // мах емкость "Добло", м3

const L10_U130_K_DobloN1m = 3.2; // коэф "Добло" №1, м
const L10_U131_K_DobloN1m = 1.1; // коэф "Добло" №2, м
const L10_U132_K_DobloN1m = 0.9; // коэф "Добло" №3, м
const L10_U133_K_DobloN1m = 4.2; // коэф "Добло" №4, м
const L10_U134_K_DobloN1m = 0.9; // коэф "Добло" №5, м
const L10_U135_K_DobloN1m = 0.55; // коэф "Добло" №6, м

// 9. Электрика. 4-110(AE-AN)
define('L10_AF6_LampMulage0459mmS_', 100 * L10_C6_Dollar);
const L10_AF6_LampMulage0459mmS = L10_AF6_LampMulage0459mmS_; // лампа муляж 0 - 459 мм (стоимость 1 шт/мп, грн)
const L10_AG6_LampMulage0459mmV = 1; // лампа муляж 0 - 459 мм (вес 1 шт/мп, кг)
const L10_AH6_LampMulage0459mmP = 12; // лампа муляж 0 - 459 мм (потребление 1шт/мп, Вт)

define('L10_AF7_Lamp_15VTS_', 9.07 * L10_C7_Euro);
const L10_AF7_Lamp_15VTS = L10_AF7_Lamp_15VTS_; // лампа 15 Вт (стоимость 1 шт/мп, грн)
const L10_AG7_Lamp_15VTV = 0.54; // лампа 15 Вт (вес 1 шт/мп, кг)
const L10_AH7_Lamp_15VTP = 15; // лампа 15 Вт (потребление 1шт/мп, Вт)

define('L10_AF8_Lamp_18VTS_', 5.69 * L10_C7_Euro);
const L10_AF8_Lamp_18VTS = L10_AF8_Lamp_18VTS_; // лампа 18 Вт (стоимость 1 шт/мп, грн)
const L10_AG8_Lamp_18VTV = 0.6; // лампа 18 Вт (вес 1 шт/мп, кг)
const L10_AH8_Lamp_18VTP = 18; // лампа 18 Вт (потребление 1шт/мп, Вт)

define('L10_AF9_Lamp_30VTS_', 8.32 * L10_C7_Euro);
const L10_AF9_Lamp_30VTS = L10_AF9_Lamp_30VTS_; // лампа 30 Вт (стоимость 1 шт/мп, грн)
const L10_AG9_Lamp_30VTV = 0.68; // лампа 30 Вт (вес 1 шт/мп, кг)
const L10_AH9_Lamp_30VTP = 30; // лампа 30 Вт (потребление 1шт/мп, Вт)

define('L10_AF10_Lamp_36VTS_', 6.03 * L10_C7_Euro);
const L10_AF10_Lamp_36VTS = L10_AF10_Lamp_36VTS_; // лампа 36 Вт (стоимость 1 шт/мп, грн)
const L10_AG10_Lamp_36VTV = 0.75; // лампа 36 Вт (вес 1 шт/мп, кг)
const L10_AH10_Lamp_36VTP = 36; // лампа 36 Вт (потребление 1шт/мп, Вт)

define('L10_AF11_Lamp_58VT_S_', 8.32 * L10_C7_Euro);
const L10_AF11_Lamp_58VT_S = L10_AF11_Lamp_58VT_S_; // лампа 58 Вт (стоимость 1 шт/мп, грн)
const L10_AG11_Lamp_58VTV = 1.36; // лампа 58 Вт (вес 1 шт/мп, кг)
const L10_AH11_Lamp_58VTP = 58; // лампа 58 Вт (потребление 1шт/мп, Вт)

define('L10_AF23_PowerSupply_60VT_IP20S_', 5.94 * L10_C6_Dollar);
const L10_AF23_PowerSupply_60VT_IP20S = L10_AF23_PowerSupply_60VT_IP20S_; // блок питания 60 ВТ, IP20 (стоимость 1 шт/мп, грн)
const L10_AG23_PowerSupply_60VT_IP20V = 0.25; // блок питания 60 ВТ, IP20 (вес 1 шт/мп, кг)

define('L10_AF24_PowerSupply_80VT_IP20S_', 8.3 * L10_C6_Dollar);
const L10_AF24_PowerSupply_80VT_IP20S = L10_AF24_PowerSupply_80VT_IP20S_; // блок питания 80 ВТ, IP20 (стоимость 1 шт/мп, грн)
const L10_AG24_PowerSupply_80VT_IP20V = 0.3; // блок питания 80 ВТ, IP20 (вес 1 шт/мп, кг)

define('L10_AF25_PowerSupply_100VT_IP20S_', 10.7 * L10_C6_Dollar);
const L10_AF25_PowerSupply_100VT_IP20S = L10_AF25_PowerSupply_100VT_IP20S_; // блок питания 100 ВТ, IP20 (стоимость 1 шт/мп, грн)
const L10_AG25_PowerSupply_100VT_IP20V = 0.4; // блок питания 100 ВТ, IP20 (вес 1 шт/мп, кг)

define('L10_AF26_PowerSupply_120VT_IP20S_', 13.1 * L10_C6_Dollar);
const L10_AF26_PowerSupply_120VT_IP20S = L10_AF26_PowerSupply_120VT_IP20S_; // блок питания 120 ВТ, IP20 (стоимость 1 шт/мп, грн)
const L10_AG26_PowerSupply_120VT_IP20V = 0.5; // блок питания 120 ВТ, IP20 (вес 1 шт/мп, кг)

define('L10_AF27_PowerSupply_180VT_IP20S_', 13.7 * L10_C6_Dollar);
const L10_AF27_PowerSupply_180VT_IP20S = L10_AF27_PowerSupply_180VT_IP20S_; // блок питания 180 ВТ, IP20 (стоимость 1 шт/мп, грн)
const L10_AG27_PowerSupply_180VT_IP20V = 0.7; // блок питания 180 ВТ, IP20 (вес 1 шт/мп, кг)


define('L10_AF29_PowerSupply_360VT_IP20S_', 18.5 * L10_C6_Dollar);
const L10_AF29_PowerSupply_360VT_IP20S = L10_AF29_PowerSupply_360VT_IP20S_; // блок питания 360 ВТ, IP20 (стоимость 1 шт/мп, грн)
const L10_AG29_PowerSupply_360VT_IP20V = 0.9; // блок питания 360 ВТ, IP20 (вес 1 шт/мп, кг)

define('L10_AF30_PowerSupply_500VT_IP20S_', 26.4 * L10_C6_Dollar);
const L10_AF30_PowerSupply_500VT_IP20S = L10_AF30_PowerSupply_500VT_IP20S_; // блок питания 500 ВТ, IP20 (стоимость 1 шт/мп, грн)
const L10_AG30_PowerSupply_500VT_IP20V = 1.1; // блок питания 500 ВТ, IP20 (вес 1 шт/мп, кг)

define('L10_AF31_PowerSupply_600VT_IP20S_', 36.3 * L10_C6_Dollar);
const L10_AF31_PowerSupply_600VT_IP20S = L10_AF31_PowerSupply_600VT_IP20S_; // блок питания 600 ВТ, IP20 (стоимость 1 шт/мп, грн)
const L10_AG31_PowerSupply_600VT_IP20V = 1.3; // блок питания 600 ВТ, IP20 (вес 1 шт/мп, кг)

define('L10_AF57_Claster3750_3kr_IP65S_', 0.25 * L10_C6_Dollar);
const L10_AF57_Claster3750_3kr_IP65S = L10_AF57_Claster3750_3kr_IP65S_; // кластер 3750, 3 кр., IP65 (стоимость 1 шт/мп, грн)
const L10_AG57_Claster3750_3kr_IP65V = 0.02; // кластер 3750, 3 кр., IP65 (вес 1 шт/мп, кг)
const L10_AH57_Claster3750_3kr_IP65R = 90; // кластер 3750, 3 кр., IP65 (размер в сборе, мм)
const L10_AL57_Claster3750_3kr_IP65P = 1.3; // кластер 3750, 3 кр., IP65 (потребление 1 шт/мп, Вт)
const L10_AJ57_Claster3750_3kr_IP65M = 0.9; // кластер 3750, 3 кр., IP65 (реал мощность 1 шт/мп, Вт, А)

define('L10_AF58_AlPolosa3750_IP20S_', 1.6 * L10_C6_Dollar);
const L10_AF58_AlPolosa3750_IP20S = L10_AF58_AlPolosa3750_IP20S_; // AL полоса 3750, IP20 (стоимость 1 шт/мп, грн)
const L10_AG58_AlPolosa3750_IP20V = 0.05; // AL полоса 3750, IP20 (вес 1 шт/мп, кг)
const L10_AH58_AlPolosa3750_IP20R = 1000; // AL полоса 3750, IP20 (размер в сборе, мм)
const L10_AL58_AlPolosa3750_IP20P = 18; // AL полоса 3750, IP20 (потребление 1 шт/мп, Вт)
const L10_AJ58_AlPolosa3750_IP20M= 12.5; // AL полоса 3750, IP20 (реал мощность 1 шт/мп, Вт, А)

define('L10_AF59_LentaDeod3750_IP20S_', 1.12 * L10_C6_Dollar);
const L10_AF59_LentaDeod3750_IP20S = L10_AF59_LentaDeod3750_IP20S_; // лента пластик 3750, IP20 (стоимость 1 шт/мп, грн)
const L10_AG59_LentaDeod3750_IP20V = 0.04; // лента пластик 3750, IP20 (вес 1 шт/мп, кг)
const L10_AH59_LentaDeod3750_IP65R = 6000; // лента пластик 3750, IP20 (размер в сборе, мм)
const L10_AL59_LentaDeod3750_IP65P = 14.4; // лента пластик 3750, IP20 (потребление 1 шт/мп, Вт)
const L10_AJ59_LentaDeod3750_IP65M = 10; // лента пластик 3750, IP20 (реал мощность 1 шт/мп, Вт, А)

define('L10_AF60_LentaDeodAleks_IP20S_', 1.3 * L10_C6_Dollar);
const L10_AF60_LentaDeodAleks_IP20S = L10_AF60_LentaDeodAleks_IP20S_; // лента диодная 4.6, "Алексей", IP20 (стоимость 1 шт/мп, грн)
const L10_AG60_LentaDeodAleks_IP20V = 0.04; // лента диодная 4.6, "Алексей", IP20 (вес 1 шт/мп, кг)

define('L10_AF67_ConnectorForAE57S_', 0.35 * L10_C6_Dollar);
const L10_AF67_ConnectorForAE57S = L10_AF67_ConnectorForAE57S_; // соеденитель для AE 57 (стоимость 1 шт/мп, грн)
const L10_AG67_ConnectorForAE57V = 0.02; // соеденитель для AE 57 (вес 1 шт/мп, кг)

define('L10_AF68_FinishForAE57S_', 0.5 * L10_C6_Dollar);
const L10_AF68_FinishForAE57S = L10_AF68_FinishForAE57S_; // финиш для AE 57 (реал мощность 1 шт/мп, Вт, А)
const L10_AG68_FinishForAE57V = 0.02; // финиш для AE 57 (вес 1 шт/мп, кг)

const L10_AF79_CabelCu_1mm2_13A = L10_C36_CabelCu; // кабель медь, 1 мм2 (13 А) (стоимость 1 шт/мп, грн)
const L10_AJ79_CabelCu_1mm2_13A = 13; // кабель медь, 1 мм2 (13 А) (стоимость 1 шт/мп, грн)
define('L10_AF80_CabelCu_15mm2_20A_', 1.54 * L10_AF79_CabelCu_1mm2_13A);
const L10_AF80_CabelCu_15mm2_20A = L10_AF80_CabelCu_15mm2_20A_; // кабель медь, 1,5 мм2 (20 А) (стоимость 1 шт/мп, грн)
const L10_AJ80_CabelCu_15mm2_20A = 20; // кабель медь, 1 мм2 (13 А) (стоимость 1 шт/мп, грн)
define('L10_AF81_ProvodPV1_05mm_', 0.32 * L10_AF79_CabelCu_1mm2_13A);
const L10_AF81_ProvodPV1_05mm = L10_AF81_ProvodPV1_05mm_; // провод ПВ1,  0,5 мм (стоимость 1 шт/мп, грн)
define('L10_AF82_ProvodPV1_075mm_', 0.45 * L10_AF79_CabelCu_1mm2_13A);
const L10_AF82_ProvodPV1_075mm = L10_AF82_ProvodPV1_075mm_; // провод ПВ1,  0,75 мм (стоимость 1 шт/мп, грн)
define('L10_AF83_ProvodPV1_1mm_', 0.6 * L10_AF79_CabelCu_1mm2_13A);
const L10_AF83_ProvodPV1_1mm = L10_AF83_ProvodPV1_1mm_; // провод ПВ1,  1 мм (стоимость 1 шт/мп, грн)

// 10. Металл, профиль цинк, кронштейн, крепёж. 4-110(AQ-AX)
const L10_AR6_TrubaBlack_2020mm = L10_C29_Truba2020Black; // труба черн. 20*20 мм (стоимость 1 шт/мп, грн)
const L10_AS6_TrubaBlack_2020mm = 1.25; // труба черн. 20*20 мм (вес 1 шт/мп, кг)
define('L10_AR7_TrubaBlack_4040mm_', L10_AR6_TrubaBlack_2020mm * 1.7);
const L10_AR7_TrubaBlack_4040mm = L10_AR7_TrubaBlack_4040mm_; // труба черн. 40*40 мм (стоимость 1 шт/мп, грн)
const L10_AS7_TrubaBlack_4040mm = 1.85; // труба черн. 40*40 мм (вес 1 шт/мп, кг)

define('L10_AR9_TrubaBlack_4025mm_', L10_AR6_TrubaBlack_2020mm * 1.9);
const L10_AR9_TrubaBlack_4025mm = L10_AR9_TrubaBlack_4025mm_; // труба черн. 40*25 мм (стоимость 1 шт/мп, грн)
const L10_AS9_TrubaBlack_4040mm = 2.35; // труба черн. 40*25 мм (вес 1 шт/мп, кг)

define('L10_AR14_PolosStalChern_20x4mm_', L10_AR6_TrubaBlack_2020mm * 0.63);
const L10_AR14_PolosStalChern_20x4mm = L10_AR14_PolosStalChern_20x4mm_; // полоса сталь черн. 20*4 мм (стоимость 1 шт/мп, грн)
const L10_AS14_PolosStalChern_20x4mm = 0.63; // полоса сталь черн. 20*4 мм (вес 1 шт/мп, кг)
define('L10_AR15_PolosStalChern_50x4mm_', L10_AR6_TrubaBlack_2020mm * 1.47);
const L10_AR15_PolosStalChern_50x4mm = L10_AR15_PolosStalChern_50x4mm_; // полоса сталь черн. 20*4 мм (стоимость 1 шт/мп, грн)
const L10_AS15_PolosStalChern_50x4mm = 1.57; // полоса сталь черн. 20*4 мм (вес 1 шт/мп, кг)

define('L10_AR23_ProfileCD_05mm_', L10_C27_ProfilCD05 / 3);
const L10_AR23_ProfileCD_05mm = L10_AR23_ProfileCD_05mm_; // профиль CD  0.5 мм (стоимость 1 шт/мп, грн)
const L10_AS23_ProfileCD_05mm = 0.47; // профиль CD  0.5 мм (вес 1 шт/мп, кг)
define('L10_AR24_ProfileUD_05mm_', L10_AR23_ProfileCD_05mm * 0.65);
const L10_AR24_ProfileUD_05mm = L10_AR24_ProfileUD_05mm_; // профиль UD  0.5 мм (стоимость 1 шт/мп, грн)
const L10_AS24_ProfileUD_05mm = 0.35; // профиль UD  0.5 мм (вес 1 шт/мп, кг)

define('L10_AR29_StilcoUgol_50501mm_', L10_AR23_ProfileCD_05mm * 1.65);
const L10_AR29_StilcoUgol_50501mm = L10_AR29_StilcoUgol_50501mm_; // Стилко уголок 50*50*1 мм (стоимость 1 шт/мп, грн)
define('L10_AR30_StilcoUgol_505012mm_', L10_AR23_ProfileCD_05mm * 1.8);
const L10_AR30_StilcoUgol_505012mm = L10_AR30_StilcoUgol_505012mm_; // Стилко уголок 50*50*1,2 мм (стоимость 1 шт/мп, грн)
define('L10_AR31_StilcoUgol_505014mm_', L10_AR23_ProfileCD_05mm * 2);
const L10_AR31_StilcoUgol_505014mm = L10_AR31_StilcoUgol_505014mm_; // Стилко уголок 50*50*1,4 мм (стоимость 1 шт/мп, грн)
define('L10_AR32_StilcoUgol_123012mm_', L10_AR23_ProfileCD_05mm * 1.3);
const L10_AR32_StilcoUgol_123012mm = L10_AR32_StilcoUgol_123012mm_; // Стилко уголок 50*50*1,4 мм (стоимость 1 шт/мп, грн)
const L10_AS32_StilcoUgol_123012mm = 0.6; // Стилко уголок 50*50*1,4 мм (вес 1 шт/мп, кг)

define('L10_AR38_BoltMetrichM8x50PlusGaika_', L10_C28_Samorez19 * 7);
const L10_AR38_BoltMetrichM8x50PlusGaika = L10_AR38_BoltMetrichM8x50PlusGaika_; // болт метрич М8*50 + гайка (стоимость 1 шт/мп, грн)
const L10_AS38_BoltMetrichM8x50PlusGaika = 0.1; // болт метрич М8*50 + гайка (вес 1 шт/мп, кг)

const L10_AR42_Samorez19ZnBur = L10_C28_Samorez19; // саморез 19, цинк, бур (стоимость 1 шт/мп, грн)
const L10_AS42_Samorez19ZnBur = 0.001; // саморез 19, цинк, бур (вес 1 шт/мп, кг)
define('L10_AR43_Samorez19BlackWood_', L10_AR42_Samorez19ZnBur * 0.6);
const L10_AR43_Samorez19BlackWood = L10_AR43_Samorez19BlackWood_; // саморез 19, черн., дерево (стоимость 1 шт/мп, грн)
const L10_AS43_Samorez19BlackWood = 0.001; // саморез 19, черн., дерево (вес 1 шт/мп, кг)

define('L10_AR49_TrosStal_', L10_AR23_ProfileCD_05mm / 9);
const L10_AR49_TrosStal = L10_AR49_TrosStal_; // трос стальной (стоимость 1 шт/мп, грн)
define('L10_AR50_ZagimForTrosStal_', L10_AR23_ProfileCD_05mm / 6);
const L10_AR50_ZagimForTrosStal = L10_AR50_ZagimForTrosStal_; // зажим для троса стального (стоимость 1 шт/мп, грн)
define('L10_AR51_kronshteynUho_', L10_AR23_ProfileCD_05mm / 2);
const L10_AR51_kronshteynUho = L10_AR51_kronshteynUho_; // кронштейн "ухо" (стоимость 1 шт/мп, грн)
const L10_AS51_kronshteynUho = 0.08; // кронштейн "ухо" (вес 1 шт/мп, кг)
define('L10_AR52_Koush_', L10_AR23_ProfileCD_05mm / 9);
const L10_AR52_Koush = L10_AR52_Koush_; // "коуш" (стоимость 1 шт/мп, грн)
define('L10_AR53_BoltKruk_', L10_AR38_BoltMetrichM8x50PlusGaika * 2);
const L10_AR53_BoltKruk = L10_AR53_BoltKruk_; // болт-крюк (стоимость 1 шт/мп, грн)
const L10_AS53_BoltKruk = 0.1; // "коуш" (вес 1 шт/мп, кг)

const L10_AR59_TrubaAL_202015mm = L10_C30_Truba2020Al; // труба AL 20*20*1.5 мм (стоимость 1 шт/мп, грн)
define('L10_AR60_TrubaAL_252515mm_', L10_AR59_TrubaAL_202015mm * 1.23);
const L10_AR60_TrubaAL_252515mm = L10_AR60_TrubaAL_252515mm_; // труба AL 25*25*1.5 мм (стоимость 1 шт/мп, грн)
define('L10_AR61_TrubaAL_40202mm_', L10_AR59_TrubaAL_202015mm * 2);
const L10_AR61_TrubaAL_40202mm = L10_AR61_TrubaAL_40202mm_; // труба AL 40*20*2 мм (стоимость 1 шт/мп, грн)

define('L10_AR69_UgolAL_121215mm_', L10_AR59_TrubaAL_202015mm * 0.35);
const L10_AR69_UgolAL_121215mm = L10_AR69_UgolAL_121215mm_; // уголок AL 12*12*1.5 мм (стоимость 1 шт/мп, грн)
const L10_AS69_UgolAL_121215mm = 0.11; // уголок AL 12*12*1.5 мм (вес 1 шт/мп, кг)
define('L10_AR70_UgolAL_151515mm_', L10_AR59_TrubaAL_202015mm * 0.4);
const L10_AR70_UgolAL_151515mm = L10_AR70_UgolAL_151515mm_; // уголок AL 15*15*1.5 мм (стоимость 1 шт/мп, грн)
const L10_AS70_UgolAL_151515mm = 0.14; // уголок AL 15*15*1.5 мм (вес 1 шт/мп, кг)

// 11. Коэфициенты, техно 1. 4-140(BA-BG)
const L10_BB6_K_PererashodPVH = 1.1; // перерасход пвх
const L10_BB7_K_PererashodAkryl = 1.2; // перерасход акрил
const L10_BB8_K_PererashodPolicarb = 1.2; // перерасход поликарбонат
const L10_BB9_K_PererashodDVP = 1.3; // перерасход двп

const L10_BB13_K_RashodSilNa1mpDT300ml = 0.05; // расход силикон на 1 мп, доля тюбика 300 мл
const L10_BB14_K_RashodCosmofenNa1mpDT200ml = 0.03; // расход "Cosmofen" на 1 мп, доля тюбика 200 мл

const L10_BB17_K_PVHPerehTolsh34Ulica_m = 0.65; // пвх, переход толщины 3/4 улица, м
const L10_BB18_K_PVHPerehTolsh34Pomesh_m = 1; // пвх, переход толщины 3/4 помещение, м
const L10_BB19_K_PVHPerehTolsh45KK_m = 0.65; // пвх, переход толщины 4/5 козырек/крыша, м

const L10_BB24_K_AkrylPerehodTolsh23Ulica_m = 0.65; // акрил, переход толщины 2/3 улица, м
const L10_BB25_K_AkrylPerehodTolsh23Pomesh_m = 1; // акрил, переход толщины 2/3 помещение, м

const L10_BB29_K_PolicarbPerehTolsh46Ulica_m = 0.8; // поликарбонат, переход толщины 4/6 улица, м
const L10_BB30_K_PolicarbPerehTolsh46Pomesh_m = 1.2; // поликарбонат, переход толщины 4/6 помещение, м

const L10_BB34_K_GranicaPOLicUlica_m = 0.9; // граница применения опор лицевых улица, м
const L10_BB35_K_GranicaPOLicPomesh_m = 1.3; // граница применения опор лицевых помещение, м

const L10_BB38_K_OpirPloshK_m2 = 1.1; // опираемая площадь козырек, м2
const L10_BB39_K_OpirPloshS_m2 = 1.3; // опираемая площадь стена, м2
const L10_BB40_K_OpirPloshP_m2 = 2.2; // опираемая площадь помещение, м2

const L10_BB45_K_PVH3mmMaxNagrNaPodv_kg = 4; // пвх 3 мм, мах нагрузка на подвес, кг
const L10_BB46_K_PVH4mmMaxNagrNaPodv_kg = 6; // пвх 4 мм, мах нагрузка на подвес, кг
const L10_BB47_K_PVH5mmMaxNagrNaPodv_kg = 10; // пвх 5 мм, мах нагрузка на подвес, кг
const L10_BB48_K_DVP3mmMaxNagrNaPodv_kg = 10; // двп 3 мм, мах нагрузка на подвес, кг
const L10_BB49_K_GranPrimPodvOD_m = 1; // граница применения подвеса одинарный/двойной, м

const L10_BB52_K_KolSticovTila1mp = 0.35; // количество стыков тыла / 1 мп
const L10_BB53_K_KolSticovBorta1mp = 0.35; // количество стыков борта / 1 мп

const L10_BB56_K_PererashTrubaBlack_20x20_40x20 = 1.2; // перерасход трубы черн. 20*20, 40*20
const L10_BB57_K_PererashUgolAL_12x12_15x15 = 1.2; // перерасход углок AL 12*12, 15*15
const L10_BB58_K_PererashCDUD = 1.2; // перерасход CD/UD
const L10_BB58_K_PererashStilkoProf = 1.2; // перерасход "Стилко" профиль
const L10_BB60_K_KolSamorezVZadStShtMp = 4; // количество саморезов в задней стенке шт./ мп
const L10_BB61_K_KolSamorezVRamaPVHKorobShtMp = 7; // количество саморезов в рама- пвх короб  шт./ мп

const L10_BB65_K_KoefPererashALDiodPolos = 1.15; // коэф. перерасхода AL диод. полосы
const L10_BB65_K_KoefPererashGibkDiodPolos = 1.05; // коэф. перерасхода гибкой диод. полосы

const L10_BB68_K_KolSticovALDiodPolos1mp = 0.8; // количество стыков AL диод. полосы / 1 мп
const L10_BB69_K_KolSticovGibkDiodPolos1mp = 0.2; // количество стыков гибкой диод. полосы / 1 мп


const L10_BB72_K_LenghtOutputKabel_mp = 4; // длинна внешнего сетевого кабеля, мп
const L10_BB73_K_ShagLinLamp1St_m = 0.3; // шаг линий ламп 1 сторона, м
const L10_BB75_K_ShagLinALPolos_m = 0.26; // шаг линий AL полос, м
const L10_BB76_K_ShagLinGibkPolos_m = 0.26; // шаг линий гибких полос, м
const L10_BB77_PloshOsvKlast3750and3krandIP65_m2 = 0.02; //площадь освещаемая кластером 3750, 3 кр., IP65, м2

const L10_BB78_K_ZapasPoTokuDlBP = 1.3; // коэф запаса по току для БП

const L10_BB81_K_PredelTokMed1mm2A = 13; // предельный ток медь 1 мм2, А
const L10_BB82_K_PredelTokMed15mm2A = 20; // предельный ток медь 1,5 мм2, А

const L10_BB85_K_PererashPlenkFasad = 1.05; // коэф перерасхода пленка фасад
const L10_BB86_K_PererashPolnocvet = 1.05; // коэф перерасхода полноцвет
const L10_BB87_K_PererashPlenkBort = 1.2; // коэф перерасхода пленка борт
const L10_BB88_K_PererashPlenkTil = 1.3; // коэф перерасхода пленка тыл

const L10_BB93_K_PloshFasadPloshPlenkDlApp = 0.5; // коэф площадь фасада/площадь пленки для аппликации
const L10_BB94_K_PloshFasadPloshPlenkTransp = 0.35; // коэф площадь фасада/пленка транспортная
const L10_BB95_K_PerimVivesDlinaResaPlot = 5; // коэф периметр вывески/длинна реза плоттера

const L10_BB101_K_PererashStrchObshPlVives = 2; // коэф перерасхода стрейча/общая площадь вывески
const L10_BB102_K_PererashKartObshPlVives = 1.5; // коэф перерасхода картон/общая площадь вывески
const L10_BB103_K_PererashUgolKartPerimVives = 2.6; // коэф перерасхода уголок картон/периметр вывески

const L10_BB109_K_PloshStandartVives = 1.8; // площадь стандартной вывески, м2
const L10_BB110_K_PopravPloshSnabj = 0.5; // коэфициент поправочный площадной (снабжение)

const L10_BB114_K_ProbAvtSnabj100kmVivesStandart = 0.5; // пробег авто снабженца 100 км/ вывеска стандарт

// 12. Коэфициенты, техно 2. 4-140(BA-BG)

// 13. Трудоёмкость. 4-140(BS-BY)
const L10_BK6_GlubinaBort1StorViveskaLampi_m =0.12; //глубина борт 1 стор вывеска лампы, м
const L10_BK7_GlubinaBort1StorViveskaLentiDiod_m =0.09; //глубина борт 1 стор вывеска ленты диод, м
const L10_BK8_GlubinaBort2StorViveskaLentiDiod_m =0.18; //глубина борт 2 стор вывеска ленты диод, м
const L10_BK9_GlubinaDopDlaVivesokBolee4m =0.03; //глубина доп для вывесок более 4 м, м
const L10_BK10_GranichnaaVisotaSvazUvelVisotiBorta = 0.8; //граничная высота связ увел высоты борта, м
const L10_BK11_GranichnaaDlinaSvazUvelVisotiBorta = 4; //граничная длина связ увел высоты борта, м
const L10_BT6_RaskrAkrylPryamougl_1mp = 4.5; // раскрой акрил прямоугольников, 1 мп
const L10_BT7_RaskrPVHPolykPryamougl_1mp = 3.5; // раскрой пвх/полик. Прямоугольников, 1 мп
const L10_BT8_PVHPogonaj_1mp = 2; // пвх погонаж, 1 мп

const L10_BT14_SborkaKleyShva_1mp = 4.5; // сборка клеевого шва , 1 мп
const L10_BT15_ObkatkaSkleyShavaAkryl_1mp = 3.5; // обкатка cклеенного шва (акрил), 1 мп
const L10_BT16_ObkatkaKleyShvaPVH_1mp = 2.5; // обкатка клеевого шва (пвх), 1 мп
const L10_BT17_Skl1mp1Ugol4StorViv_min = 20; // склейка 1 мп 1 угла 4 сторонней вывески, мин
const L10_BT18_Skl1Ugol4StorVivMinim_min = 10; // склейка 1 угла 4 сторонней вывески минимум, мин

const L10_BT21_PriresStalProfCDUDStilk_1sht = 4; // прирезка сталь профиля (CD, UD, Стилко), 1 шт.

const L10_BT25_VkruchSamorez_1sht = 2; // вкручивание самореза, 1 шт.
const L10_BT26_VkruchSeriiSamorezov_1sht = 1.2; // вкручивание серии саморезов, 1 шт.
const L10_BT27_SverlOtvDo5mm_1sht = 3; // сверление отверстия до 5 мм, 1 шт.
const L10_BT28_SverlOtvBol5mm_1sht = 5; // сверление отверстия более 5 мм, 1 шт.

const L10_BT32_MinCalcSqureFullColor_m2 = 0.5; // минимальная расчетная площадь полноцвета, м2
const L10_BT33_KnurlFullColor_m2 = 25; // накатка полноцвета, 1 м2
const L10_BT34_KnurlRitramaHalfCat_m2 = 35; // "Ritrama" с полупрорезом, накатать/выбрать , 1 м2
const L10_BT35_SampleAplication_m2 = 35; // аппликация, подготовить/нанести 1м2

const L10_BT43_SeamingSideInFill_120mm = 10; // закатка борта (120 мм) в пленку, 1 мп
const L10_BT44_SeamingSideInFile_240mm = 15; // закатка борта (240 мм) в пленку, 1 мп

const L10_BT49_MaketL24_1sht = 200; // макет L24, 1 шт.
const L10_BT50_MaketZakazch_1sht = 60; // макет заказчика, 1 шт.

const L10_BT55_MontajBlockPit_1sht = 15; // монтаж блока питания, 1 шт.
const L10_BT56_MontajLamp_1sht = 20; // монтаж лампы, 1 шт.
const L10_BT57_MontajKlast_1sht = 1.5; // монтаж кластера, 1 шт.
const L10_BT58_MontajALDiodLin_1mp = 12; // монтаж AL диодной линии, 1 мп
const L10_BT59_MontajGibkDiodPolos_1mp = 8; // монтаж гибкой диодной полосы, 1 мп

const L10_BT66_UpakVStrech_1m2 = 1.5; // упаковка в стрейч, 1 м2
const L10_BT67_UpakVGofrokart_1m2 = 15; // упаковка в гофрокартон, 1 м2

const L10_BT75_SnabjStandartVives1i8m2 = 180; // снабжение, стандартная вывеска (1.8 м2)
const L10_BT76_EzdPoGorodu_minNAkm = 2.4; // езда по городу, мин/км
const L10_BT77_EzdZaGorodom_minNAkm = 1.2; // езда за городом, мин/км

class L10
{
// Глобальные константы - доступны из любого класса - БД
// Вычислений нет и не будет, просто заглушка.

}
