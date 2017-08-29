<?php
pdo_query("DROP TABLE IF EXISTS ".tablename('tyzm_diamondvote_blacklist').";");
pdo_query("DROP TABLE IF EXISTS ".tablename('tyzm_diamondvote_count').";");
pdo_query("DROP TABLE IF EXISTS ".tablename('tyzm_diamondvote_domainlist').";");
pdo_query("DROP TABLE IF EXISTS ".tablename('tyzm_diamondvote_friendship').";");
pdo_query("DROP TABLE IF EXISTS ".tablename('tyzm_diamondvote_gift').";");
pdo_query("DROP TABLE IF EXISTS ".tablename('tyzm_diamondvote_looklist').";");
pdo_query("DROP TABLE IF EXISTS ".tablename('tyzm_diamondvote_redpack').";");
pdo_query("DROP TABLE IF EXISTS ".tablename('tyzm_diamondvote_reply').";");
pdo_query("DROP TABLE IF EXISTS ".tablename('tyzm_diamondvote_viporder').";");
pdo_query("DROP TABLE IF EXISTS ".tablename('tyzm_diamondvote_votedata').";");
pdo_query("DROP TABLE IF EXISTS ".tablename('tyzm_diamondvote_voteuser').";");
?>