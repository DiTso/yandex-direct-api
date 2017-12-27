<?php

namespace directapi\services\audiencetargets\enum;


use directapi\components\Enum;

class AudienceTargetFieldEnum extends Enum
{
    const ID = 'Id';
    const AD_GROUP_ID = 'AdGroupId';
    const CAMPAIGN_ID = 'CampaignId';
    const RETARGETING_LIST_ID = 'RetargetingListId';
    const INTEREST_ID = 'InterestId';
    const CONTEXT_BID = 'ContextBid';
    const STRATEGY_PRIORITY = 'StrategyPriority';
    const STATE = 'State';
}