<?php 

//data
$HeartRate = 85;
$HRMax = 197;
$HRV = 29;
$RestingHR = 68;
$HRZones = 26.75;
$SleepTime = 6.1;
$RPESurvey = 3;
$MentalHealthSurvey = 3;

//Coefficient
$HeartRateCoefficient = 1.5;
$HRMaxCoefficient = 1;
$HRVCoefficient = -2;
$RestingHRCoefficient = 2.5;
$HRZonesCoefficient = 5;
$SleepTimeCoefficient = -3;
$RPESurveyCoefficient = 3;
$MentalHealthSurveyCoefficient = -1;

//Answer

$HeartRateAnswer = $HeartRate * $HeartRateCoefficient;
$HRMaxAnswer = $HRMax * $HRMaxCoefficient;
$HRVAnswer = $HRV * $HRVCoefficient;
$RestingHRAnswer = $RestingHR * $RestingHRCoefficient;
$HRZonesAnswer = $HRZones * $HRZonesCoefficient;
$SleepTimeAnswer = $SleepTime * $SleepTimeCoefficient;
$RPESurveyAnswer = $RPESurvey * $RPESurveyCoefficient;
$MentalHealthSurveyAnswer = $MentalHealthSurvey * $MentalHealthSurveyCoefficient;

//Total
$AllCombined = $HeartRateAnswer + $HRMaxAnswer + $HRVAnswer + $RestingHRAnswer + $HRZonesAnswer + $SleepTimeAnswer + $RPESurveyAnswer + $MentalHealthSurveyAnswer;
$main = $AllCombined / 8;

//Standard Deviation

$StandardDeviationHeartRate = $HeartRateAnswer - $main;
$StandardDeviationHeartRateSquare = $StandardDeviationHeartRate * $StandardDeviationHeartRate;

$StandardDeviationHRMax = $HRMaxAnswer - $main;
$StandardDeviationHRMaxSquare = $StandardDeviationHRMax * $StandardDeviationHRMax;

$StandardDeviationHRV = $HRVAnswer - $main;
$StandardDeviationHRVSquare = $StandardDeviationHRV * $StandardDeviationHRV;

$StandardDeviationRestingHR = $RestingHRAnswer - $main;
$StandardDeviationRestingHRSquare = $StandardDeviationRestingHR * $StandardDeviationRestingHR;

$StandardDeviationHRZones = $HRZonesAnswer - $main;
$StandardDeviationHRZonesSquare = $StandardDeviationHRZones * $StandardDeviationHRZones;

$StandardDeviationSleepTime = $SleepTimeAnswer - $main;
$StandardDeviationSleepTimeSquare = $StandardDeviationSleepTime * $StandardDeviationSleepTime;

$StandardDeviationRPESurvey = $RPESurveyAnswer - $main;
$StandardDeviationRPESurveySquare = $StandardDeviationRPESurvey * $StandardDeviationRPESurvey;

$StandardDeviationMentalHealthSurvey = $MentalHealthSurveyAnswer - $main;
$StandardDeviationMentalHealthSurveySquare = $StandardDeviationMentalHealthSurvey * $StandardDeviationMentalHealthSurvey;

//Total Standard Deviation
$TotalStandardDeviation = $StandardDeviationHeartRateSquare + $StandardDeviationHRMaxSquare + $StandardDeviationHRVSquare + $StandardDeviationRestingHRSquare + $StandardDeviationHRZonesSquare + $StandardDeviationSleepTimeSquare + $StandardDeviationRPESurveySquare + $StandardDeviationMentalHealthSurveySquare;

//total Standard Deviation Devide by 7
$TotalStandardDeviationDevide = $TotalStandardDeviation / 7;

//Square Root of TotalStandardDeviationDevide
$SquareRootTotalStandardDeviationDevide = sqrt($TotalStandardDeviationDevide);

//avarage between the mean standard deviation
$AvarageBetweenMeanStandardDeviation = $SquareRootTotalStandardDeviationDevide + $main;
$totalBetweenMeanAndDeviation = $AvarageBetweenMeanStandardDeviation / 2;

//difrence between the devide/SquareRootTotalStandardDeviationDevide and totalBetweenMeanAndDeviation
$DifferenceBetweenMainAndTotal = $main - $totalBetweenMeanAndDeviation;
$DifferenceBetweenSquareAndTotal = $SquareRootTotalStandardDeviationDevide - $totalBetweenMeanAndDeviation;
//thesquare root of the difference between
$SquareRootDifferenceBetweenMainAndTotal = $DifferenceBetweenMainAndTotal * $DifferenceBetweenMainAndTotal;
$SquareRootDifferenceBetweenSquareAndTotal = $DifferenceBetweenSquareAndTotal * $DifferenceBetweenSquareAndTotal;

//count them total
$totalcount = $SquareRootDifferenceBetweenMainAndTotal + $SquareRootDifferenceBetweenSquareAndTotal;

//squeroot of the totalcount
$SquareRootTotalCount = sqrt($totalcount);
echo round($SquareRootTotalCount, 2);
?>