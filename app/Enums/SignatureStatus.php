<?php

namespace app\Enums;

enum SignatureStatus: int {
    
    case ACTIVED = 1;
    case INACTIVED = 2;
    case SUSPENDED = 3;
    case CANCELED = 0;
}

