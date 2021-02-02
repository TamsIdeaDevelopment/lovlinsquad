<?php
/**
 * Created by PhpStorm.
 * User: mhmj
 * Date: 15/10/2020
 * Time: 5:29 PM
 */

namespace App\Http\Controllers\Team\Lists;

use App\Agent;
use App\Agent_levels;
use App\Http\Resources\Agent as AgentResources;

class ListTeam
{
    /** @var  Agent */
    private $repository;

    /** @var  Agent_levels */
    private $agent_levels;

    /**
     * ListTeam constructor.
     * @param Agent $repository
     * @param Agent_levels $agent_levels
     */
    public function __construct(Agent $repository, Agent_levels $agent_levels)
    {
        $this->repository = $repository;
        $this->agent_levels = $agent_levels;
    }


    public function list()
    {
        $data = $this->repository->where([
            ['HQ', '=', '0'],
            ['status', '=', '1']])->latest()->get();

        return AgentResources::collection($data);
    }

    public function listHQ()
    {
        $data = $this->repository->where([
            ['HQ', '=', '1'],
            ['status', '=', '1']])->latest()->get();

        return AgentResources::collection($data);
    }

    public function agentProfile($id)
    {
        $data = $this->repository->findOrFail($id);

        return new AgentResources($data);
    }
    public function agentDetails($id)
    {
        $data = $this->repository->where('user_id',$id)->first();

        return response()->json($data);
    }
    public function agentInformation($id)
    {
        $data = $this->repository->where('user_id',$id)->first();

        return new AgentResources($data);
    }
    public function TeamMember($id)
    {
        $data = $this->repository->where([['leader_id',$id]])->latest()->get();

        return AgentResources::collection($data);
    }

    public function SearchTeam($territory_id,$agent_level_id)
    {
        $level= $this->agent_levels->findOrFail($agent_level_id);

        //$agent_leader_level = $this->agent_levels->where('name', $level->parent)->first();

        $data = $this->repository->whereNotNull('member_no')->where([['territory_id',$territory_id],['agent_levels_id','<', $level->id ]])->latest()->get();



        return AgentResources::collection($data);

//        $level= $this->agent_levels->findOrFail($agent_level_id);
//
//        $agent_leader_level = $this->agent_levels->where('name', $level->parent)->first();
//
//        if(!$agent_leader_level->parent)
//        {
//            $data = $this->repository->where('HQ',1)->latest()->get();
//        }
//        else
//        {
//            $data = $this->repository->whereNotNull('member_no')->where([['territory_id',$territory_id],['agent_levels_id',$agent_leader_level->id]])->latest()->get();
//        }
//
//
//        return AgentResources::collection($data);
    }

    public function TeamMemberUnderLevelOnly($id)
    {
//        $leader_level = $this->repository->where('user_id',$id)->first();
//
//        $parent_name = $this->agent_levels->where('id', $leader_level->agent_levels_id)->first();
//
//        $agent_leader_level = $this->agent_levels->where('parent', $parent_name->name)->first();

//        return $agent_leader_level;

        $data = $this->repository->where('leader_id',$id)->OrderBy('agent_levels_id')->get();
//        $data = $this->repository->whereNotNull('member_no')->where([['leader_id',$id],['agent_levels_id',$agent_leader_level->id]])->OrderBy('agent_levels_id')->get();

        return AgentResources::collection($data);
    }

    public function listNewLeader($levelID)
    {
        $data = $this->repository->where([
            ['agent_levels_id', '=', $levelID],
            ['status', '=', '1']])->latest()->get();

        return AgentResources::collection($data);
    }
    public function listNewLeaderBasedOnParent($id)
    {
        $agent_level = $this->agent_levels->where('priority','<',$id)->get();

        $listLeader= $this->repository->where([
            ['agent_levels_id', '<', $id],
            ['status', '=', '1']])->latest()->get();

        return AgentResources::collection($listLeader);

//        $parent_name = $this->agent_levels->findOrFail($id);
//
//        $agent_level = $this->agent_levels->where('name', $parent_name->parent)->first();
//
//        $data = $this->repository->where([
//            ['agent_levels_id', '=', $agent_level->id],
//            ['status', '=', '1']])->latest()->get();
//
//        return AgentResources::collection($data);
//        $agent_level = $this->agent_levels->where('priority','<',$id)->get();
//
//        foreach ($agent_level as $data)
//        {
//
//            $listLeader[]= $this->repository->where([
//                ['agent_levels_id', '=', $data['id']],
//                ['status', '=', '1']])->latest()->first();
//        }
//        $object = json_decode(json_encode($listLeader), true);
//        $a = array();
//        foreach($object as $data)
//        {
//            if ($data !== null) {
//                $a[] = array(
////                'id' => $data[0]['id'],
////                'point' => $data[0]['point'],
////                'HQ' => $data[0]['HQ'],
////                'user_id' => $data[0]['user_id'],
////                'agent_levels_id' => $data[0]['agent_levels_id'],
////                'leader_id' => $data[0]['leader_id'],
////                'referral_id' => $data[0]['referral_id'],
////                'territory_id' => $data[0]['territory_id'],
////                'state_id' => $data[0]['state_id'],
////                'city' => $data[0]['city'],
////                'district' => $data[0]['district'],
////                'country' => $data[0]['country'],
////                'paid' => $data[0]['paid'],
////                'status' => $data[0]['status'],
////                'member_no' => $data[0]['member_no'],
////                'created_at' => $data[0]['created_at'],
////                'updated_at' => $data[0]['updated_at'],
//
//                    'id' => $data['id'],
//                    'point' => $data['point'],
//                    'HQ' => $data['HQ'],
//                    'user_id' => $data['user_id'],
//                    'agent_levels_id' => $data['agent_levels_id'],
//                    'leader_id' => $data['leader_id'],
//                    'referral_id' => $data['referral_id'],
//                    'territory_id' => $data['territory_id'],
//                    'state_id' => $data['state_id'],
//                    'city' => $data['city'],
//                    'district' => $data['district'],
//                    'country' => $data['country'],
//                    'paid' => $data['paid'],
//                    'status' => $data['status'],
//                    'member_no' => $data['member_no'],
//                    'created_at' => $data['created_at'],
//                    'updated_at' => $data['updated_at'],
//                );
//            }
//        }
//
//
//        $object1 = json_decode(json_encode($a), false);
//        return AgentResources::collection($object1);
    }
}