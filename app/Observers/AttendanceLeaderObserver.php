<?php

namespace App\Observers;

use App\Models\AttendanceLeader;
use App\Events\ChangeAttendanceEvent;

class AttendanceLeaderObserver
{
    /**
     * Handle the AttendanceLeader "created" event.
     */
    public function created(AttendanceLeader $attendanceLeader): void
    {
        //
    }

    /**
     * Handle the AttendanceLeader "updated" event.
     */
    public function updated(AttendanceLeader $attendanceLeader): void
    {
        broadcast(new ChangeAttendanceEvent($attendanceLeader::all()));
    }

    /**
     * Handle the AttendanceLeader "deleted" event.
     */
    public function deleted(AttendanceLeader $attendanceLeader): void
    {
        //
    }

    /**
     * Handle the AttendanceLeader "restored" event.
     */
    public function restored(AttendanceLeader $attendanceLeader): void
    {
        //
    }

    /**
     * Handle the AttendanceLeader "force deleted" event.
     */
    public function forceDeleted(AttendanceLeader $attendanceLeader): void
    {
        //
    }
}
