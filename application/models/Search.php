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
join SITE s on p.site_id=s.id
where p.site_id in (select id from SITE i
where
i.goods like '%$goods%'
and i.size like '%$size%'
and i.side like '%$side%'
and i.paperType like '%$paperType%'
and i.paperThick like '%$paperThick%'
and i.color like '%$color%'
and i.coating like '%$coating%')
and p.goods = '$goods'
and p.size = '$size'
and p.side = '$side'
and p.paperType = '$paperType'
and p.paperThick = '$paperThick'
and p.color = '$color'
and p.coating = '$coating'
and p.amount = '$amount'
order by p.price
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
join SITE s on p.site_id=s.id
where p.site_id in (select id from SITE i
where
i.goods like '%$goods%'
and i.size like '%$size%'
and i.side like '%$side%'
and i.paperType like '%$paperType%'
and i.paperThick like '%$paperThick%'
and i.color like '%$color%'
and i.coating like '%$coating%')
and p.goods = '$goods'
and p.size = '$size'
and p.side = '$side'
and p.paperType = '$paperType'
and p.paperThick = '$paperThick'
and p.color = '$color'
and p.coating = '$coating'
and p.amount > '$amount'
order by p.price
");


  }
  public function silsigan(){
    $goods=$this->input->get('goods');
    $size=$this->input->get('size');
    $side=$this->input->get('side');
    $paperType=$this->input->get('paperType');
    $paperThick=$this->input->get('paperThick');
    $color=$this->input->get('color');
    $coating=$this->input->get('coating');
    $amount=$this->input->get('amount');
    return $this->db->query("
select count(*) from PARSED p
join SITE s on p.site_id=s.id
where p.site_id in (select id from SITE i
where
i.goods like '%$goods%'
and i.size like '%$size%'
and i.side like '%$side%'
and i.paperType like '%$paperType%'
and i.paperThick like '%$paperThick%'
and i.color like '%$color%'
and i.coating like '%$coating%')
and p.goods like '%$goods%'
and p.size like '%$size%'
and p.side like '%$side%'
and p.paperType like '%$paperType%'
and p.paperThick like '%$paperThick%'
and p.color like '%$color%'
and p.coating like '%$coating%'
and p.amount = '$amount'
order by p.price
");


  }

}
