[user]：
其中[user]表示當前登錄的使用者名稱。

crontab：
是一個用於建立、編輯或顯示當前使用者的cron工作的命令。

-l：
選項表示“list”，目的是列出當前使用者的所有 cron 工作。

0 2 * * *：定義了工作的執行時間：

0: 分鐘 (0到59)
2: 小時 (0到23)，所以是指2:00 AM。
*: 日 (1到31)。星號意味著“每一天”。
*: 月 (1到12)。星號意味著“每一個月”。
*: 一周的哪一天 (0到7，其中0和7都是代表星期日)。星號意味著“每一天”。

0 2 * * * php /var/www/html/mshop/releaseSession.php：

設定表示每天的凌晨2點執行執行releaseSession.php 這個PHP腳本。


