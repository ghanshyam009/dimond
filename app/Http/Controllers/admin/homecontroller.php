<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
   public function boil(){
    return view('admin.boil');
   }
   public function boiling1(){
    return view('admin.boiling1');
   }
   public function boiling1list(){
    return view('admin.boiling1list');
   }
   public function boiling1lots(){
    return view('admin.boiling1lots');
   }
   public function boiling1lotslist(){
    return view('admin.boiling1lotslist');
   }
   public function boiling1packets(){
    return view('admin.boiling1packets');
   }
   public function boiling1packetslist(){
    return view('admin.boiling1packetslist');
   }
   public function boilingend(){
    return view('admin.boilingend');
   }
   public function boilingendlist(){
    return view('admin.boilingendlist');
   }
   public function cancelpacketlist(){
    return view('admin.cancelpacketlist');
   }
   public function centerdepartment(){
    return view('admin.centerdepartment');
   }
   public function chocolatedashboardlist(){
      return view('admin.chocolatedashboardlist');
     }

     public function createbatchsequence(){
      return view('admin.createbatchsequence');
     }
     public function createboiling1(){
      return view('admin.createboiling1');
     }

     public function createcolor(){
      return view('admin.createcolor');
     }
     public function createfinishtype(){
      return view('admin.createfinishtype');
     }


     public function createlotprocess(){
      return view('admin.createlotprocess');
     }
     public function createmachinelaser(){
      return view('admin.createmachinelaser');
     }
     public function createmachineequipments(){
      return view('admin.createmachineequipments');
     }
     public function createpackets(){
      return view('admin.createpackets');
     }
     public function createpolishing1(){
      return view('admin.createpolishing1');
     }
     public function createpurchase1(){
      return view('admin.createpurchase1');
     }
     public function createproductcategories(){
      return view('admin.createproductcategories');
     }
     public function createprocessreson(){
      return view('admin.createprocessreson');
     }
     public function createpurchase1vendors(){
      return view('admin.createpurchase1vendors');
     }
     public function createpurchase1products(){
      return view('admin.createpurchase1products');
     }
     public function createpurchase1orders(){
      return view('admin.createpurchase1orders');
     }
     public function createpurity(){
      return view('admin.createpurity');
     }
     public function createvendorpricelists(){
      return view('admin.createvendorpricelists');
     }
     public function createstockmove(){
      return view('admin.createstockmove');
     }
          public function createshape(){
      return view('admin.createshape');
     }
     public function finalpacketlistkarben(){
      return view('admin.finalpacketlistkarben');
     }
     public function finalpacketlist(){
      return view('admin.finalpacketlist');
     }
     public function finalpacketkarben(){
      return view('admin.finalpacketkarben');
     }
     public function finalpacket(){
      return view('admin.finalpacket');
     }
     public function discuss1(){
      return view('admin.discuss1');
     }
     public function general(){
      return view('admin.general');
     }
     public function finishtype(){
      return view('admin.finishtype');
     }
     public function finalstocklist(){
      return view('admin.finalstocklist');
     }
     public function finalpackets(){
      return view('admin.finalpackets');
     }
     public function history(){
      return view('admin.history');
     }
     public function growing(){
      return view('admin.growing');
     }
     public function generalsetting(){
      return view('admin.generalsetting');
     }
     public function index1(){
      return view('admin.index1');
     }
     public function Jangadlist(){
      return view('admin.Jangadlist');
     }
     public function laserlist(){
      return view('admin.laserlist');
     }

     public function laser(){
      return view('admin.laser');
     }
     public function jobwork1list(){
      return view('admin.jobwork1list');
     }
     public function lotsdashboardlist(){
      return view('admin.lotsdashboardlist');
     }
     public function locationlist(){
      return view('admin.locationlist');
     }

     public function machineequipmentslist(){
      return view('admin.machineequipmentslist');
     }
     public function machineequipments(){
      return view('admin.machineequipments');
     }

     public function lotslist(){
      return view('admin.lotslist');
     }
     public function manufacturing(){
      return view('admin.manufacturing');
     }
     public function machinelist(){
      return view('admin.machinelist');
     }
     public function machinelaserlist(){
      return view('admin.machinelaserlist');
     }

     public function packetlaserlistdashboard(){
      return view('admin.packetlaserlistdashboard');
     }
     public function packetkarben(){
      return view('admin.packetkarben');
     }
     public function packetdashboard(){
      return view('admin.packetdashboard');
     }
     public function polishing1endslist(){
      return view('admin.polishing1endslist');
     }
     public function polishing1ends(){
      return view('admin.polishing1ends');
     }
     public function polishing1(){
      return view('admin.polishing1');
     }
     public function partylist(){
      return view('admin.partylist');
     }

     public function polishing1list(){
      return view('admin.polishing1list');
     }
     public function polishing1lotslist(){
      return view('admin.polishing1lotslist');
     }
     public function polishing1lots(){
      return view('admin.polishing1lots');
     }
     public function polishing1packets(){
      return view('admin.polishing1packets');
     }
     public function polishing1packetslist(){
      return view('admin.polishing1packetslist');
     }

     public function productcategories(){
      return view('admin.productcategories');
     }
     public function purchase(){
      return view('admin.purchase');
     }
     public function purchase1chart(){
      return view('admin.purchase1chart');
     }
     public function purchase1calendar(){
      return view('admin.purchase1calendar');
     }
     public function purchase1ascendingchart(){
      return view('admin.purchase1ascendingchart');
     }
     public function purchase1activity(){
      return view('admin.purchase1activity');
     }
     public function purchase1(){
      return view('admin.purchase1');
     }
     public function stockquantlist(){
      return view('admin.stockquantlist');
     }
     public function vendorpricelistkarban(){
      return view('admin.vendorpricelistkarban');
     }
     public function vendorpricelists(){
      return view('admin.vendorpricelists');
     }

     public function weightlosslist(){
      return view('admin.weightlosslist');
     }
     public function stocklist(){
      return view('admin.stocklist');
     }
     public function stockmovelist(){
      return view('admin.stockmovelist');
     }
     public function settinguserslist(){
      return view('admin.settinguserslist');
     }
     public function starred(){
      return view('admin.starred');
     }
     public function settingcompanieslist(){
      return view('admin.settingcompanieslist');
     }
     public function settingmanufacturing(){
      return view('admin.settingmanufacturing');
     }
     public function settingpurchase(){
      return view('admin.settingpurchase');
     }
     public function settings1(){
      return view('admin.settings1');
     }

     public function seed(){
      return view('admin.seed');
     }

     public function purchase1table(){
          return view('admin.purchase1table');
         }
         public function purchase1tableexpand(){
          return view('admin.purchase1tableexpand');
         }
         public function purchase1taxes(){
          return view('admin.purchase1taxes');
         }
         public function purchase1untaxtedamount(){
          return view('admin.purchase1untaxtedamount');
         }
         public function purchase1vendors(){
          return view('admin.purchase1vendors');
         }
         public function purchase1vendorslist(){
          return view('admin.purchase1vendorslist');
         }
         public function purchase1orderslist(){
          return view('admin.purchase1orderslist');
         }
         public function purchase1piechart(){
          return view('admin.purchase1piechart');
         }
         public function purchase1products(){
          return view('admin.purchase1products');
         }
         public function purchase1productslist(){
          return view('admin.purchase1productslist');
         }
         public function purchase1purchaseanalysis(){
          return view('admin.purchase1purchaseanalysis');
         }
         public function purchase1purchaseanalysistable(){
          return view('admin.purchase1purchaseanalysistable');
         }
         public function purchase1stackedchart(){
          return view('admin.purchase1stackedchart');
         }
         public function purchase1descendingchart(){
          return view('admin.purchase1descendingchart');
         }
         public function purchase1linechart(){
          return view('admin.purchase1linechart');
         }
         public function purchase1list(){
          return view('admin.purchase1list');
         }
         public function purchase1orders(){
          return view('admin.purchase1orders');
         }
         public function purchase1count(){
          return view('admin.purchase1count');
         }
         public function purchase1currentlyrate(){
          return view('admin.purchase1currentlyrate');
         }


           public function clickfinalstock(){
            return view('admin.clickfinalstock');
           }
           public function clickchocolatedashboard(){
            return view('admin.clickchocolatedashboard');
           }
           public function clicklaser(){
            return view('admin.clicklaser');
           }
           public function clickmachinemanagement(){
            return view('admin.clickmachinemanagement');
           }
           public function clickjobwork1(){
            return view('admin.clickjobwork1');
           }

           public function clickfinalpacketkarben(){
            return view('admin.clickfinalpacketkarben');
           }
           public function clickfinalpacketkarbenlist(){
            return view('admin.clickfinalpacketkarbenlist');
           }
           public function clickhistory(){
            return view('admin.clickhistory');
           }
}