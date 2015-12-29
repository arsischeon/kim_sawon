<?php
class Search extends CI_Model{
  public function __construct()
        {
          $goods;
          $size;
          $side;
          $paperType;
          $paperThick;
          $color;
          $coating;
          $amount;
          $this->load->database();
        }

  public function gosuExact(){
    $goods=$this->input->get('goods');
    $size=$this->input->get('size');
    $side=$this->input->get('side');
    $paperType=$this->input->get('paperType');
    $paperThick=$this->input->get('paperThick');
    $color=$this->input->get('color');
    $coating=$this->input->get('coating');
    $amount=$this->input->get('amount');
      return $this->db->query("
select * from PARSED p
join SITE s in p.site_id=s.id
where p.site_id in (select id from SITE
where
goods like '$goods'
and size like '$size'
and side like '$side'
and paperType like '$paperType'
and paperThick like '$paperThick'
and color like '$color'
and coating like '$coating')
and goods = '$goods'
and size = '$size'
and side = '$side'
and paperType = '$paperType'
and paperThick = '$paperThick'
and color = '$color'
and coating = '$coating'
and amount = '$amount'
order by price
");
  }


  public function gosuSimmilar(){
    $goods=$this->input->get('goods');
    $size=$this->input->get('size');
    $side=$this->input->get('side');
    $paperType=$this->input->get('paperType');
    $paperThick=$this->input->get('paperThick');
    $color=$this->input->get('color');
    $coating=$this->input->get('coating');
    $amount=$this->input->get('amount');
    return $this->db->query("
select * from PARSED p
join SITE s in p.site_id=s.id
where p.site_id in (select id from SITE
where
goods like '$goods'
and size like '$size'
and side like '$side'
and paperType like '$paperType'
and paperThick like '$paperThick'
and color like '$color'
and coating like '$coating')
and goods = '$goods'
and size = '$size'
and side = '$side'
and paperType = '$paperType'
and paperThick = '$paperThick'
and color = '$color'
and coating = '$coating'
and amount > '$amount'
order by price
");


  }

}
