<?php 

namespace pocketmine\block;

use pocketmine\item\Item;
use pocketmine\item\Tool;

class EndPortalFrameWithEye extends Solid{

	protected $id = self::END_PORTAL_FRAME_WITH_EYE;
	public function __construct(){
	}
	public function getName() : string{
		return "End Portal Frame With Eye";
	}
	public function getHardness(){
		return -1;
	}
	
	public function getResistance(){
		return 18000000;
	}
	public function isBreakable(Item $item){
		return false;
	} 
}
