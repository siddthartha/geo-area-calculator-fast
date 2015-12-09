<?php

/**
 * Author: Anton Sadovnikoff
 * Email:  sadovnikoff@gmail.com
 */

namespace siddthartha\geo\area\fast\tests\unit\geoAreaFast;


use siddthartha\geo\area\fast\helpers\GeoAreaFastCalculator;
use siddthartha\geo\area\fast\tests\unit\BaseTestCase;

class GeoAreaFastTest extends BaseTestCase {

	public function testGeoAreaFast() {
                
                // кадастровый участок из одного полигона 69:14:0000016:84 
                // кадастровая площадь 36.52 га
		$area = GeoAreaFastCalculator::getArea( [
                        [56.982548643784,36.836865268768],[56.982437653588,36.836797742369],[56.982067683878,36.83659516317],[56.98084675775,36.836325057572],[56.980254779157,36.836460110371],[56.979588791989,36.838485902357],[56.978441786167,36.83801321756],[56.977701763662,36.838350849558],[56.976406688891,36.836730215969],[56.975962652888,36.836325057572],[56.975740632901,36.83666268957],[56.975592618841,36.837135374366],[56.976221674533,36.838756007955],[56.978478786907,36.843145223925],[56.97892279291,36.848817441487],[56.979884787756,36.849897863879],[56.980106783038,36.849897863879],[56.980698763984,36.848749915087],[56.980957752689,36.848614862288],[56.981401729135,36.847601966295],[56.982215672203,36.846048859106],[56.98236365994,36.845508647909],[56.982992601261,36.837202900766]
                ] );
                
		$this->assertEquals( $area, 375825.53859376907, "36.52 ? $area" );
                
                // кадастровый участок из одного полигона 69:04:0000012:914
                // кадастровая площадь 171.42 га
		$area2 = GeoAreaFastCalculator::getArea( [
                        [58.086825851999,34.415427996453],[58.086569810175,34.41470048528],[58.08328377701,34.405566178327],[58.08149126774,34.400311930965],[58.082302175943,34.397725224571],[58.082728962333,34.396108533075],[58.081960743156,34.395542691051],[58.07504602638,34.391420127736],[58.074960651135,34.391420127736],[58.074789900032,34.39182430061],[58.07393613227,34.394815179878],[58.070947784301,34.38980343624],[58.06966698717,34.387540068146],[58.069069266119,34.386246714949],[58.068685011588,34.386650887823],[58.068258057259,34.387378398996],[58.068172665781,34.387620902721],[58.068172665781,34.388267579319],[58.068471535062,34.391662631461],[58.068514230469,34.394653510729],[58.06859962113,34.394896014453],[58.06885579189,34.395138518177],[58.068941181735,34.394976849028],[58.068941181735,34.394411007004],[58.069069266119,34.39416850328],[58.069154655453,34.394653510729],[58.069581599061,34.394734345303],[58.069709681148,34.395057683603],[58.069709681148,34.395219352752],[58.069581599061,34.395461856477],[58.06966698717,34.3960276985],[58.069111960811,34.396674375099],[58.069111960811,34.396916878823],[58.069197350043,34.396997713398],[58.069282739071,34.397401886272],[58.069453516515,34.397725224571],[58.069709681148,34.397886893721],[58.069880456549,34.397886893721],[58.070222004901,34.397482720847],[58.070520857029,34.397401886272],[58.070734321303,34.39804856287],[58.070990476747,34.399341916067],[58.071545473905,34.399746088941],[58.071545473905,34.399988592666],[58.071374706468,34.40006942724],[58.070392777852,34.399341916067],[58.069965843943,34.399341916067],[58.06979506895,34.399503585217],[58.069837762775,34.399826923516],[58.070136618119,34.400635269264],[58.070563549986,34.401524449587],[58.070947784301,34.40209029161],[58.071502782123,34.402009457036],[58.071673548948,34.402979471933],[58.071844314956,34.403141141083],[58.072057771317,34.403141141083],[58.072143153504,34.402979471933],[58.072100462436,34.402332795335],[58.072399298841,34.402575299059],[58.07252737082,34.402898637358],[58.072911584001,34.404191990555],[58.073167723825,34.405727847477],[58.073210413617,34.407910380996],[58.07385075437,34.41033541824],[58.074533771848,34.410739591114],[58.075387525318,34.411467102288],[58.077009600659,34.411547936862],[58.077479135028,34.411709606012],[58.07782061069,34.412598786335],[58.078290134391,34.413245462933],[58.078503552213,34.413164628358],[58.078845018074,34.41267962091],[58.079357210741,34.412922124634],[58.079655986403,34.413245462933],[58.080040122864,34.413811304957],[58.080168167432,34.414619650705],[58.080040122864,34.415993838477],[58.079698668436,34.417287191673],[58.079869396058,34.417772199122],[58.080168167432,34.418095537421],[58.080466936305,34.418014702847],[58.080594979343,34.417853033697],[58.081363227919,34.417691364547],[58.082131459958,34.416317176776],[58.082856997255,34.417125522524],[58.083155743619,34.417206357099],[58.084564085653,34.416398011351],[58.086271092391,34.416074673051],[58.086825851999,34.416074673051],[58.087337930136,34.416883018799]                
                ] );

                $this->assertEquals( $area2, 1687711.19617939, "171.42 ? $area2" );
	}
}
